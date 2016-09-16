<?php
namespace A3020\GuzzleHttp\Tests;

use A3020\GuzzleHttp\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testMutableConfig()
    {
        $client = new Client(['base_uri' => 'foo']);
        $client->setConfigOption('base_uri', 'http://localhost');

        $this->assertEquals("http://localhost", $client->getConfig('base_uri'));
    }
}