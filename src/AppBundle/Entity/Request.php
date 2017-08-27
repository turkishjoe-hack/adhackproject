<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * License
 *
 * @ORM\Table(name="request")
 * @ORM\Entity()
 */
class Request
{
    /**
     *
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *  @var integer
     */
    protected $id;

    /**
     * TODO:Add your description
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id", nullable=true)
     */
    private $item;

    /**
     * TODO:Add your description
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=127)
     *
     * @var string
     */
    protected $message;

    /**
     * TODO:Add your description
     * @ORM\Column(type="datetime")
     *
     */
    protected $createTime;


    public function getId()
    {
        return $this->id;
    }
}
