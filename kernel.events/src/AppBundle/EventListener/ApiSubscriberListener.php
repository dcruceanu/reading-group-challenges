<?php


namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;

/**
 * Class ApiSubscriberListener
 *
 * @package AppBundle\EventListener
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class ApiSubscriberListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'kernel.view' => array(
                array('changeControllerFormat', 10),
            ),
        );
    }

    public function changeControllerFormat(GetResponseForControllerResultEvent $event)
    {
        $controllerResult = $event->getControllerResult();
        $request          = $event->getRequest();

        $routeFromRequest = $request->attributes->get('_route');

        if ($routeFromRequest == "app.api.product") {
            $event->setResponse(new JsonResponse($controllerResult));
        }
    }
}
