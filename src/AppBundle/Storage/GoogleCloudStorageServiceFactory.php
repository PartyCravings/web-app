<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Storage;

use Google_Client;
use Google_Service_Storage;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of GoogleCloudStorageService.
 */
class GoogleCloudStorageServiceFactory
{
    public static function createService(ContainerInterface $container)
    {
        // creating the google client
        $client = new Google_Client();
        $client->setScopes([Google_Service_Storage::DEVSTORAGE_READ_WRITE]);
        $client->setAuthConfig($container->getParameter('gcp_key'));

        // creating and returning the service
        return new Google_Service_Storage($client);
    }
}
