<?php


namespace AppBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class RedirectControllerListenerTest
 *
 * @package AppBundle\Tests\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class RedirectControllerListenerTest extends WebTestCase
{
    public function testWhenWeAccessCatchableControllerWeReceiveResponseFromRewrittenController()
    {
        $client = static::createClient();
        $client->request('GET', '/catch');

        $this->assertEquals('Captured', $client->getResponse()->getContent());
    }

}
