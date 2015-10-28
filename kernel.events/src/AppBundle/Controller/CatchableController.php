<?php


namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CatchableController
 *
 * @package AppBundle\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 *
 * @Route("/catch")
 */
class CatchableController
{
    /**
     * @Route("")
     *
     * @return Response
     */
    public function indexAction()
    {
        return new Response("Catchable",500);
    }
}
