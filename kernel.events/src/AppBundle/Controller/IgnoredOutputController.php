<?php

namespace AppBundle\Controller;
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
     * @return Response
     */
    public function indexAction()
    {
        return new Response(200, "I come from the controller");
    }
}
