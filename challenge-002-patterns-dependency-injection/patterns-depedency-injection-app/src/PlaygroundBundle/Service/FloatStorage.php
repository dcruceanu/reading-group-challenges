<?php


namespace PlaygroundBundle\Service;

/**
 * Class FloatStorage
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class FloatStorage implements StorageInterface
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
    public function getArrayOfFloats()
    {
        return $this->arrayOfFloats;
    }

    /**
     * @param array $arrayOfFloats
     *
     * @return $this
     */
    public function setArrayOfFloats($arrayOfFloats)
    {
        $this->arrayOfFloats = $arrayOfFloats;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRenderer()
    {
        return $this->renderer;
    }

    /**
     * @param mixed $renderer
     *
     * @return $this
     */
    public function setRenderer($renderer)
    {
        $this->renderer = $renderer;

        return $this;
    }

}
