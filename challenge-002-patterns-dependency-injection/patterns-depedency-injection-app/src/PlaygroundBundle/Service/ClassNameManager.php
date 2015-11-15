<?php


namespace PlaygroundBundle\Service;

/**
 * Class ClassNameManager
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class ClassNameManager
{
    protected $listOfDependencies ="";

    public function __construct(array $services)
    {
        foreach($services as $service) {
            $this->listOfDependencies = ($this->listOfDependencies).",".(get_class($service));
        }

    }

    public function getListOfClasses()
    {
        return $this->listOfDependencies;
    }

}
