<?php


namespace PlaygroundBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Chair
 *
 * @package PlaygroundBundle\Entity
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 *
 * @ORM\Entity(repositoryClass="PlaygroundBundle\Repository\ChairRepository")
 * @ORM\Table(name="chair")
 */
class Chair
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
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    protected $price;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=160)
     */
    protected $colour;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     *
     * @return $this
     */
    public function setColour($colour)
    {
        $this->colour = $colour;

        return $this;
    }
}
