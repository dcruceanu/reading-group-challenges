<?php

namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * Class CustomHeaderListener
 *
 * @package AppBundle\EventListener
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class CustomHeaderListener
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        $customHeader['X-READING-GROUP'] = '*';

        $event->getRequest()->headers->add($customHeader);
    }
}
