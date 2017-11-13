<?php

namespace AppBundle\Storage;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Google_Client;
use Google_Service_Storage;

/**
 * Description of GoogleCloudStorageService
 */
class GoogleCloudStorageServiceFactory
{
    public static function createService(ContainerInterface $container)
    {
        // creating the google client
        $client = new Google_Client();
        $client->setScopes(
            array(
                Google_Service_Storage::DEVSTORAGE_FULL_CONTROL
            )
        );
        $client->setAuthConfig(
            $container->getParameter('gcp_key')
        );
        if ($client->isAccessTokenExpired()) {
            $client->refreshTokenWithAssertion();
        }

        // creating and returning the service
        return new Google_Service_Storage($client);
    }
}
