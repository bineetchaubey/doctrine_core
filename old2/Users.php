<?php

/**
*@author bineet 
*/

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *@Entity @table(name="Users")
 */
class Users
{

   /**
   *@Id
    *@Column(type="integer") @GeneratedValue
    * @var integer
    */
    private $id;

    /**
    *@Column(type="string")
     * @var string
     */
    private $name;

    /**
    *@Column(type="string") 
     * @var string
     */
    private $address;

    /**
    *@Column(type="string") 
     * @var string
     */
    private $gender;


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
     * Set name
     *
     * @param string $name
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Users
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }
}