<?php
// src/Product.php
/**
 * @Entity @Table(name="products")
 **/
class Product
{
    /**
     * /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
     /** @Column(type="string") **/
     protected $name;


     /** @Column(type="string") **/
     protected $rating;



    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    
   public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

}