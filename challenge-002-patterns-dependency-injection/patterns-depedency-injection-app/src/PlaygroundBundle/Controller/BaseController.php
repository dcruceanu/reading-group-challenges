<?php


namespace PlaygroundBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 * Class BaseController
 *
 * @package PlaygroundBundle\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 *
 * @Route("/base")
 */
class BaseController extends Controller
{
    /**
     * @Method("GET")
     * @Route("/index", name="playground.base.index")
     *
     * @return Response
     */
    public function indexAction()
    {
        //$classNames = $this->get('playground.service.class_name_manager')->getListOfClasses();
        return new Response("Bundle and routes configured correctly !");
    }

}
