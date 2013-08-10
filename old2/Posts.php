<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *@Entity @table(name="posts")
 */
class Posts
{
    /**
    *@Column (type="string")
     * @var string
     */
    private $title;

    /**
    *@Column (type="string")
     * @var string
     */
    private $body;

    /**
    *@id
    *@Column (type="integer") @GeneratedValue
     * @var integer
     */
    private $id;


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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}