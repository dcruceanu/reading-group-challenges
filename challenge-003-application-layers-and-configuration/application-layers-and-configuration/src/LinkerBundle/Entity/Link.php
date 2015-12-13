<?php


namespace LinkerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Table
 *
 * @package PlaygroundBundle\Entity
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 *
 * @ORM\Table(name="link")
 */
class Link
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $url;
}
