<?php


namespace AppBundle\EventListener;

use AppBundle\Controller\CatchableController;
use AppBundle\Controller\RewrittenController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

/**
 * Class RedirectControllerListener
 *
 * @package AppBundle\EventListener
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class RedirectControllerListener
{
    /**
     * @var ControllerResolver
     */
    protected $controllerResolver;

    public function __construct(ControllerResolver $controllerResolver)
    {
        $this->controllerResolver = $controllerResolver;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $request = new Request();
        $request->attributes->set('_controller', 'AppBundle:Rewritten:captured');

        if ($event->getController()[0] instanceof CatchableController) {
            $event->setController($this->controllerResolver->getController($request));
        }
    }
}
