<?php


namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class IgnoreOutputListenerTest
 *
 * @package AppBundle\Tests\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class IgnoreOutputListenerTest extends WebTestCase
{
    public function testWhenWeCallIgnoreOutputControllerWeReceiveTheValueFromTheListener()
    {
        $client = static::createClient();
        $client->request('GET', '/ignore');

        $this->assertEquals("Interception OK", $client->getResponse()->getContent());
    }
}
