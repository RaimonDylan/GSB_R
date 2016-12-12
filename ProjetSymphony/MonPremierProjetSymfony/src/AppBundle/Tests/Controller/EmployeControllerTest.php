<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmployeControllerTest extends WebTestCase
{
    public function testVoir()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/employe/{id}');
    }

}
