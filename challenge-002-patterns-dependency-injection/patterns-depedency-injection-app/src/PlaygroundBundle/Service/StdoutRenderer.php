<?php


namespace PlaygroundBundle\Service;

/**
 * Class StdoutRenderer
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class StdoutRenderer implements RendererInterface
{
    public function renderValue($value)
    {
        print_r($value);
    }
}
