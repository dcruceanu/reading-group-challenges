<?php


namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiController
 *
 * @package AppBundle\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 *
 * @Route("/api")
 */
class ApiController
{
    /**
     * @Route("/product", name="app.api.product")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function productAction(Request $request)
    {
        $header['X-READING-GROUP'] = $request->headers->get('X-READING-GROUP');
        return $header;
    }
}
