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

    public function getById($id)
    {
        $this->getChairRepository()->setEntityManager($this->getEntityManager());
        $id = $this->getChairRepository()->getById($id);

        $this->logger->info("Chair {$id} was retrieved from the database");
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
    public function getChairRepository()
    {
        return $this->chairRepository;
    }

    /**
     * @param mixed $chairRepository
     *
     * @return $this
     */
    public function setChairRepository($chairRepository)
    {
        $this->chairRepository = $chairRepository;

        return $this;
    }
}
