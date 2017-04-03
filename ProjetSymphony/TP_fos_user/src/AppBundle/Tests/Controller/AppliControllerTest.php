<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AppliControllerTest extends WebTestCase
{
    public function testCreercours()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/creerCours');
    }

}
