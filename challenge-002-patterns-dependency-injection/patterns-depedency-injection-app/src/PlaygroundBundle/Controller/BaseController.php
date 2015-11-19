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
        $integerValues = $this->get('playground.service.integer_storage')->addValue(3);
        $floatValues = $this->get('playground.service.float_storage')->addValue(3.2);

        $valuesPrintedOnStdoutThroughFactoryService = $this->get('playground.service.file_renderer')->renderValue(22);
        $valuesPrintedInFileThroughFactoryService = $this->get('playground.service.stdout_renderer')->renderValue(22);

        return new Response("Bundle and routes configured correctly !");
    }

}
