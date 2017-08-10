<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $crawler = $client->request('GET', '/Login');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());


      
    }

    public function testLogout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/logout');

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
      
    }

    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/register');

        $this->assertEquals(301, $client->getResponse()->getStatusCode());

        $crawler = $client->request('GET', '/Register');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
       
    }

    public function testuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user');

        $this->assertEquals(301, $client->getResponse()->getStatusCode());

        $crawler = $client->request('GET', '/User');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
       
    }

    public function testnew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user/new');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

       
    }

    



}
