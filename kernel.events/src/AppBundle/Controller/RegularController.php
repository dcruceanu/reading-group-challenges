<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RegularController
 *
 * @package AppBundle\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 *
 * @Route("/regular")
 */
class RegularController
{
    /**
     * @Route("")
     *
     * @return Response
     */
    public function indexAction()
    {
        return new Response();
    }
}
