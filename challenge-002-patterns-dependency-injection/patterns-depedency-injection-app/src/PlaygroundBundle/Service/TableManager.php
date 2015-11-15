<?php


namespace PlaygroundBundle\Service;

use Doctrine\ORM\EntityManager;
use PlaygroundBundle\Repository\TableRepository;
use Psr\Log\LoggerInterface;

/**
 * Class TableManager
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class TableManager extends BaseEntityManager
{
    protected $logger;

    protected $tableRepository;

    public function getById($id)
    {
        $this->getTableRepository()->setEntityManager($this->getEntityManager());
        $id = $this->getTableRepository()->getById($id);

        $this->getLogger()->info("Table {$id} was retrieved from the database");
    }

    /**
     * @return mixed
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param mixed $logger
     *
     * @return $this
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTableRepository()
    {
        return $this->tableRepository;
    }

    /**
     * @param mixed $tableRepository
     *
     * @return $this
     */
    public function setTableRepository($tableRepository)
    {
        $this->tableRepository = $tableRepository;

        return $this;
    }

}
