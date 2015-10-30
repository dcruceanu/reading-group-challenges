<?php


namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

/**
 * Class IgnoreOutputListener
 *
 * @package AppBundle\EventListener
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class IgnoreOutputListener
{
    public function onKernelResponse(FilterResponseEvent $event)
    {
        if ($event->getRequest()->attributes->get('_route') == "app.ignore") {
            $event->setResponse(new Response("Interception OK"));
        }
    }
}
