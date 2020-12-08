<?php


namespace App\model;


class MobileLogin
{
    protected $id;
    protected $name;
    protected $password;
    protected $enterTheaPassword;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
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
        return $this->enterTheaPassword;
    }

    /**
     * @param mixed $enterThePassword
     */
    public function setEnterThePassword($enterThePassword)
    {
        $this->enterTheaPassword = $enterThePassword;
    }

}
