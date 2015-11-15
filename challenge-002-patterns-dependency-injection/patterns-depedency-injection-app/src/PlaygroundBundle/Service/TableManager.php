<?php


namespace PlaygroundBundle\Service;

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

    function __construct(LoggerInterface $logger, TableRepository $tableRepository)
    {
        $this->logger = $logger;
        $this->tableRepository = $tableRepository;
    }

    public function getById($id)
    {
        $this->tableRepository->setEntityManager($this->getEntityManager());
        $id = $this->tableRepository->getById($id);

        $this->logger->info("Table {$id} was retrieved from the database");
    }

}
