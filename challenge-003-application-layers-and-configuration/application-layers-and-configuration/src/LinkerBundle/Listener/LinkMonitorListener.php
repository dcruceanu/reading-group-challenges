<?php

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use \LinkerBundle\Controller\LinkController;

/**
 * Class LinkMonitorListener
 *
 * @author Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class LinkMonitorListener
{
    protected $domains = ['http://google.ro', 'http://facebook.com'];

    public function onKernelRequest(GetResponseEvent $event)
    {
        if(null !== $event->getRequest()->get('link')) {
            
        }
    }
}
