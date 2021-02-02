<?php
namespace App\Tests\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControllerTest extends WebTestCase
{
    public function testCreateEmpty()
    {
        $client = static::createClient();

        $client->request('POST', '/api/products');

        echo "\n===============================================\n";
        echo "\n======= TRY CREATE EMPTY -> Answer: 400 =======\n";
        print_r($client->getResponse()->getContent());
        $this->assertEquals(400, $client->getResponse()->getStatusCode());
        echo "\n===============================================\n";
    }
    public function testCreateData()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/api/products',
            [],
            [],
            [],
            '{"name":"Pack de 24 CocaColas","description":"Pack Ahorro 24, te sale la lata a 0.55€","ean":"1234567890123","sku":"56785550","categories":[1,2,3],"type":"lata","weight":"3.2","enabled":"0"}'
        );
        echo "\n===============================================\n";
        echo "\n======== TRY CREATE FULL -> Answer: 200 =======\n";
        print_r($client->getResponse()->getContent());
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        echo "\n===============================================\n";
    }
    public function testCreateDataWrong()
    {
        $client = static::createClient();

        $client->request(
            'POST',
            '/api/products',
            [],
            [],
            [],
            '{"name":"Atún rojo","description":"Filetes de Atún Rojo del Cantábrico sin espinas","ean":"1234567890","sku":"567890","categories":[1,2,3],"type":"fresco","weight":"0.6","enabled":"1"}'
        );
        echo "\n===============================================\n";
        echo "\n===== TRY CREATE WRONG DATA -> Answer: 400 ====\n";
        print_r($client->getResponse()->getContent());
        $this->assertEquals(400, $client->getResponse()->getStatusCode());
        echo "\n===============================================\n";
    }
}