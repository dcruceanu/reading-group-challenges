<?php


namespace AppBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class ApiSubscriberTest
 *
 * @package AppBundle\Tests
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class ApiSubscriberTest extends WebTestCase
{
    public function testWhenWeAccessApiControllerWeReceiveAnArrayWhichCountainsTheXReadingGroupHeader()
    {
        $client = static::createClient();
        $client->request('GET', '/api/product');

        $this->assertJson($client->getResponse()->getContent());
        $this->assertNotEquals("{}", $client->getResponse()->getContent());
    }
}
