<?php


namespace App\model;


class Login
{
    protected $id;
    protected $name;
    protected $password;
    protected $enterThePassword;

    public function __construct($name, $password, $enterThePassword)
    {
        $this->name = $name;
        $this->password = $password;
        $this->enterThePassword = $enterThePassword;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEnterThePassword()
    {
        return $this->enterThePassword;
    }

    /**
     * @param mixed $enterThePassword
     */
    public function setEnterThePassword($enterThePassword)
    {
        $this->enterThePassword = $enterThePassword;
    }


}