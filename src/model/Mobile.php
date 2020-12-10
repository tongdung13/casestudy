<?php


namespace App\model;


class Mobile
{
    protected $id;
    protected $name;
    protected $price;
    protected $img;
    protected $category_id;


    public function __construct($name,$price,$img,$category_id)
    {

        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category_id = $category_id;


    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $image
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

}