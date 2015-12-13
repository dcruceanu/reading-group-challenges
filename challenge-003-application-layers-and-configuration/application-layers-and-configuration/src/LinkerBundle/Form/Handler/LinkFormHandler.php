<?php


namespace LinkerBundle\Form\Handler;

use LinkerBundle\Entity\Link;
use LinkerBundle\Service\LinkManager;
use Symfony\Component\Form\FormInterface;

/**
 * Class Link
 *
 * @package LinkerBundle\Form\Handler
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class LinkFormHandler
{
    /**
     * @var LinkManager
     */
    protected $linkManager;

    /**
     * LinkFormHandler constructor.
     *
     * @param LinkManager $linkManager
     */
    public function __construct(LinkManager $linkManager)
    {
        $this->linkManager = $linkManager;
    }

    public function handle(FormInterface $form)
    {
        if (!$form->isValid()) {
            return false;
        }
    }

    /**
     * @param Link $link
     */
    public function createLink(Link $link)
    {
        $this->getLinkManager()->getEntityManager()->persist($link);
        $this->getLinkManager()->getEntityManager()->flush();
    }

    /**
     * @return LinkManager
     */
    public function getLinkManager()
    {
        return $this->linkManager;
    }

    /**
     * @param LinkManager $linkManager
     *
     * @return $this
     */
    public function setLinkManager($linkManager)
    {
        $this->linkManager = $linkManager;

        return $this;
    }

}
