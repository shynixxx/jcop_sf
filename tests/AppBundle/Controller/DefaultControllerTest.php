<?php

namespace Tests\AppBundle\Controller;

use PHPUnit\Framework\TestCase;

class DefaultControllerTest extends TestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
