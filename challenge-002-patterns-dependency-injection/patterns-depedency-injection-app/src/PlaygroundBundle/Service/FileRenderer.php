<?php


namespace PlaygroundBundle\Service;

/**
 * Class FileRenderer
 *
 * @package PlaygroundBundle\Service
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class FileRenderer implements RendererInterface
{
    public function renderValue($value)
    {
        file_put_contents('values.txt', $value, FILE_APPEND);
    }
}
