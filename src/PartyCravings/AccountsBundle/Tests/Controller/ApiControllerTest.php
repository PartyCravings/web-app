<?php

namespace PartyCravings\AccountsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $data = array(
            'partyid' => 1,
            'id' => 5,
            'priority' => '2'
        );
        $client->request('PUT', '/', ['body' => json_encode($data)]);
        assert('Hello World', $client->getResponse()->getContent());

        //$this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
