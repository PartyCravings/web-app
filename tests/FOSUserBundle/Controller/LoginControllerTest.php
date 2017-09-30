<?php

namespace Tests\FOSUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    private $_client;

    private $_loginUrl;

    public function setUp()
    {
        $this->_client = static::createClient();
        $loginUrl  = $this->_client
            ->getContainer()
            ->get('router')
            ->generate('fos_user_security_login', array(), true);
        $this->_loginUrl = sprintf('http://localhost%s', $loginUrl);
    }

    public function testWrongPasswordLogin()
    {
        $crawler = $this->_client->request('GET', $this->_loginUrl);
        $this->assertTrue($this->_client->getResponse()->isSuccessful());

        $this->assertEquals(1, $crawler->filter('#submit')->count());
        $form = $crawler->filter('#submit')
            ->form(
                array(
                    '_username'  => 'test',
                    '_password'  => 'wrongPassword'
                    )
                );
        $this->_client->submit($form);
        
        $this->assertTrue($this->_client->getResponse()->isRedirect($this->_loginUrl), "Submit ok");
        // Assign the redirect to the crawler
        $crawler = $this->_client->followRedirect();

        $this->assertTrue($this->_client->getResponse()->isSuccessful(), "Correct redirect to page ok");
        $this->assertSame($this->_loginUrl, $this->_client->getHistory()->current()->getUri());
        $this->assertGreaterThan(0, $crawler->filter('#error')->count());
    }
}
