<?php


namespace PlaygroundBundle\Service\Factory;
use PlaygroundBundle\Service\FileRenderer;
use PlaygroundBundle\Service\StdoutRenderer;

/**
 * Class RendererFactory
 *
 * @package PlaygroundBundle\Service\Factory
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class RendererFactory
{
    const STDOUT_RENDERER = "stdout";
    const FILE_RENDERER = "file";

    static function create($renderer)
    {
        if($renderer === self::FILE_RENDERER) {
            return (new FileRenderer());
        }
        else if($renderer === self::STDOUT_RENDERER) {
            return (new StdoutRenderer());
        }
    }
}
