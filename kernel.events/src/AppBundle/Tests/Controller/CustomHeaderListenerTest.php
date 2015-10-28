<?php


namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class CustomHeaderListenerTest
 *
 * @package AppBundle\Tests\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class CustomHeaderListenerTest extends WebTestCase
{
    public function testWhenWeMakeARequestWeHaveACustomHeader()
    {
        $client = static::createClient();
        $client->request('GET', '/regular');

        $this->assertEquals('*', $client->getRequest()->headers->get('X-READING-GROUP'));
    }
}
