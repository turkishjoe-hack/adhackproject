<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * License
 *
 * @ORM\Table(name="category")
 * @ORM\Entity()
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * TODO:Add your description
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", nullable=true)
     */
    private $parent;

    /**
     * @ORM\Column(type="string", length=127)
     *
     * @var string
     */
    protected $name;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * TODO:Add your description
     *
     * @return \DateTime
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * TODO:Add your description
     *
     * @param \DateTime $name TODO:Add your desc
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * TODO:Add your description
     *
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * TODO:Add your description
     *
     * @param mixed $parent TODO:Add your desc
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }
}
