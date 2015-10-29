<?php


namespace AppBundle\EventListener;

use AppBundle\Controller\ApiController;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

/**
 * Class ApiSubscriber
 *
 * @package AppBundle\EventListener
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class ApiSubscriber implements EventSubscriberInterface
{
    // name: kernel.event_subscriber
    public static function getSubscribedEvents()
    {
        return array(
            'kernel.response' => array(
                array('onKernelResponse', 10),
            ),
            'kernel.view'     => array(
                array('onKernelView', 10),
            ),
        );
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        $request                  = $event->getRequest();
        $customHeadersFromRequest = $event->getRequest()->headers->get('X-READING-GROUP');

        $routeFromRequest = $request->attributes->get('_route');
        if ($routeFromRequest == "app.api.product") {
            $event->setResponse($customHeadersFromRequest);
        }
    }

    public function onKernelView(GetResponseForControllerResultEvent $event)
    {
        if ($event->getController()[0] instanceof ApiController) {
            $response = json_encode($event->getControllerResult());
            $event->setResponse($response);
        }
    }
}
