<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Doctrine;

use AppBundle\Entity\Country;
use Cloudflare\API\Adapter\Guzzle;
use Cloudflare\API\Auth\APIKey;
use Cloudflare\API\Endpoints\DNS;
use Cloudflare\API\Endpoints\Zones;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use GuzzleHttp\Exception\ClientException;

class DnsRecordUpdateListener implements EventSubscriber
{
    public function __construct(
        string $email,
        string $apiKey,
        string $hostname
) {
        $adapter = new Guzzle(
            new APIKey(
                $email,
                $apiKey
            )
        );
        $this->zones = new Zones($adapter);
        $this->dns = new DNS($adapter);
        $this->hostname = $hostname;
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        if (
            !$args->getEntity() instanceof Country && !$args->hasChangedField('subdomain')) {
            return;
        }

        try {
            $zoneID = $this->zones->getZoneID($this->hostname);

            $records = $this->dns->listRecords(
                    $zoneID,
                    '',
                    '',
                    '',
                    1,
                    1000
                );

            $key = array_search(
                    $args->getOldValue('subdomain'),
                        array_column(
                            $records->result,
                                'name'
                            ), true
                    );

            $details = [
                    'name' => $args->getNewValue('subdomain'),
                    'type' => 'CNAME',
                    'content' => $this->hostname,
                    'ttl' => 1,
                    'proxied' => true,
                ];
            $this->dns->updateRecordDetails(
                    $zoneID,
                    $records->result[$key]->id,
                    $details
                );
        } catch (ClientException $e) {
            return;
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof Country) {
            return;
        }

        try {
            $zoneID = $this->zones->getZoneID($this->hostname);

            $this->dns->addRecord(
                $zoneID,
                'CNAME',
                $entity->getName(),
                $this->hostname,
                1,
                true
            );
        } catch (ClientException $e) {
            return;
        }
    }

    public function getSubscribedEvents()
    {
        return ['prePersist', 'preUpdate'];
    }
}
