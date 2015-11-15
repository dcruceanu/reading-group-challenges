<?php


namespace PlaygroundBundle\Service;

/**
 * Class DoubleCoutingService
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class DoubleCoutingService extends AbstractCountingService
{
    protected $countingFactor = 2;

    public function getCountingFactor()
    {
        return $this->countingFactor;
    }

    public function getNext($item)
    {
        return $item + $this->getCountingFactor();
    }
}
