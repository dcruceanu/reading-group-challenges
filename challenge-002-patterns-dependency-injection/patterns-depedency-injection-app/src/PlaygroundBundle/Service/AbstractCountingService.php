<?php


namespace PlaygroundBundle\Service;

/**
 * Class AbstractCountingService
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
abstract class AbstractCountingService
{
    public abstract function getCountingFactor();

    public abstract function getNext($item);
}
