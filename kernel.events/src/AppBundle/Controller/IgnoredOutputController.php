<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IgnoredOutputController
 *
 * @package AppBundle\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class IgnoredOutputController
{
    /**
     * @Route("/ignore", name="app.ignore")
     *
     * @return Response
     */
    public function indexAction()
    {
        return new Response("I come from the controller", 200);
    }
}
