<?php


namespace PlaygroundBundle\Service;

/**
 * Class TripleCoutingService
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class TripleCoutingService extends AbstractCountingService
{
    protected $countingFactor = 3;

    public function getCountingFactor()
    {
        return $this->countingFactor;
    }

    public function getNext($item)
    {
        return $item + $this->getCountingFactor();
    }

}
