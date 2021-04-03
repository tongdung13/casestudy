<?php


namespace App\model;


class Mobile
{
    protected $id;
    protected $name;
    protected $price;
    protected $image;
    protected $category_id;


    public function __construct($name, $price, $image, $category_id)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category_id = $category_id;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        /**
         * Get the value of category_id
         */ 
        public function getCategory_id()
        {
                return $this->category_id;
        }

        /**
         * Set the value of category_id
         *
         * @return  self
         */ 
        public function setCategory_id($category_id)
        {
                $this->category_id = $category_id;

                return $this;
        }
}