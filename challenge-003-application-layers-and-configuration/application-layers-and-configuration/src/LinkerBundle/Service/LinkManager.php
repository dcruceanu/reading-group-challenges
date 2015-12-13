<?php


namespace LinkerBundle\Service;

use Doctrine\ORM\EntityManager;

/**
 * Class LinkManager
 *
 * @package LinkerBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class LinkManager
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * LinkManager constructor.
     *
     * @param $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * @param EntityManager $entityManager
     *
     * @return $this
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;

        return $this;
    }

}
