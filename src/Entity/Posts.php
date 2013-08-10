<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity
 */
class Posts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=255, nullable=false)
     */
    private $body;

    /**
    *@ORM\ManyToOne(targetEntity="Users", inversedBy="posts")
    *@ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
     private $author;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Posts
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Posts
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
    *  Get User 
    *@return user
    */
    function getAuthor()
    {
        return $this->user;
    }


    function setAuthor(Users $user)
    {
        $this->author= $user;
        return $this;
    }

   /** @param User $user */
   /* public function setUser(User $user) {
        if($user === null || $user instanceof User) {
            $this->user = $user;
        } else {
            throw new InvalidArgumentException('$user must be instance of Entity\User or null!');
        }
    }*/



}