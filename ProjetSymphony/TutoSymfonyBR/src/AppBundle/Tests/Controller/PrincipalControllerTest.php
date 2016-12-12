<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrincipalControllerTest extends WebTestCase
{
    public function testHello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/{message}');
    }

}
