<?php


namespace PlaygroundBundle\Repository;

use Doctrine\ORM\EntityManager;

/**
 * Class ChairRepository
 *
 * @package PlaygroundBundle\Repository
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class ChairRepository
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    public function getById($id)
    {
        $query = $this->getEntityManager()->createQuery("
            SELECT c
            FROM PlaygroundBundle:Chair c
            WHERE t.id = :id
        ");

        $query
            ->setParameter('id', $id);

        return $query->getOneOrNullResult();
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
