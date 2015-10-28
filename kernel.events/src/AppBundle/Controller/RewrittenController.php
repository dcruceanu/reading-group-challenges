<?php


namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RewrittenController
 *
 * @package AppBundle\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 *
 * @Route("/rewritten")
 */
class RewrittenController
{
    /**
     * @Route("/capture")
     *
     * @return Response
     */
    public function capturedAction()
    {
        return new Response("Captured");
    }

}
