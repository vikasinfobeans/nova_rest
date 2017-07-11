<?php

namespace RestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RestApiControllerTest extends WebTestCase
{
    public function testgetTopAlbumsAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/get_top_albums/US');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }
}
