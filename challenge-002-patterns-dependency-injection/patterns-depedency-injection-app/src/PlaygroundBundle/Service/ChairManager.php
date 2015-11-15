<?php


namespace PlaygroundBundle\Service;

/**
 * Class ChairManager
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class ChairManager extends BaseEntityManager
{
    protected $logger;

    protected $chairRepository;

    function __construct(LoggerInterface $logger, TableRepository $chairRepository)
    {
        $this->logger = $logger;
        $this->chairRepository = $chairRepository;
    }

    public function getById($id)
    {
        $this->chairRepository->setEntityManager($this->getEntityManager());
        $id = $this->chairRepository->getById($id);

        $this->logger->info("Chair {$id} was retrieved from the database");
    }
}
