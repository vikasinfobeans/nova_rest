<?php

namespace RestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RestApiControllerTest extends WebTestCase
{
    public function testgetTopAlbumsAction()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/top-albums/us');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertGreaterThan(0,
            $crawler->filter('html:contains("Hello World")')->count();
    }

    public function testgetTopSinglesAction()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/top-singles/us');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    public function testfeaturedArtistAction()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/featured-artist/us');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
