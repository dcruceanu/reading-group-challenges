<?php


namespace PlaygroundBundle\Repository;
use Doctrine\ORM\EntityManager;

/**
 * Class TableRepository
 *
 * @package PlaygroundBundle\Repository
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class TableRepository
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    public function getById($id)
    {
        $query = $this->getEntityManager()->createQuery("
            SELECT t
            FROM PlaygroundBundle:Table t
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
