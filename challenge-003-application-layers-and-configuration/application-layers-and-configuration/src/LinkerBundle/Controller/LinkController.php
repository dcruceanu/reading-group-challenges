<?php


namespace LinkerBundle\Controller;

use LinkerBundle\Entity\Link;
use LinkerBundle\Form\LinkForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Link
 *
 * @package LinkerBundle\Controller
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 *
 * @Route("/link")
 */
class LinkController extends Controller
{
    /**
     * @Route("/", name = "linker.link.create")
     * @Method("GET", "POST")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createLinkAction(Request $request)
    {
        $link = new Link();
        $form = $this->createForm(new LinkForm(), $link);

        $linkManagerService = $this->get('linker.link_form_handler.service');

        if ($request->isMethod('POST')) {
            $form->submit($request->request->get($form->getName()));

            if ($linkManagerService->handle($form)) {
                try {
                    $linkManagerService->saveLink($link);
                    $this->addFlash('notice', 'Link was successfully saved!');
                } catch (\PDOException $e) {
                    $this->addFlash('notice', 'The server encountered a problem.');
                }
                return $this->redirectToRoute('linker.link.create');
            }
        }

        return $this->render('@Linker/Link/create-link.html.twig', [
            'form'    => $form->createView()
        ]);
    }
}
