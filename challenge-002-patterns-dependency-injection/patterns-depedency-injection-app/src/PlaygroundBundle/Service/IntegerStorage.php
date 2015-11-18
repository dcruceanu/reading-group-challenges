<?php


namespace PlaygroundBundle\Service;

/**
 * Class IntegerStorage
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class IntegerStorage implements StorageInterface
{
    /**
     * @var RendererInterface
     */
    protected $renderer;

    public function addValue($value)
    {
        $this->getRenderer()->renderValue($value);
    }

    /**
     * @return array
     */
    public function getArrayOfIntegers()
    {
        return $this->arrayOfIntegers;
    }

    /**
     * @param array $arrayOfIntegers
     *
     * @return $this
     */
    public function setArrayOfIntegers($arrayOfIntegers)
    {
        $this->arrayOfIntegers = $arrayOfIntegers;

        return $this;
    }

    /**
     * @return RendererInterface
     */
    public function getRenderer()
    {
        return $this->renderer;
    }

    /**
     * @param RendererInterface $renderer
     *
     * @return $this
     */
    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;

        return $this;
    }

}
