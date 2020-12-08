<?php


namespace App\model;


class MobileLoginDb
{
    protected $data;

    public function __construct()
    {
        $db = new Dbconnect();
        $this->data = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from registration";
        $stmt = $this->data->query($sql);
        $stmt->fetch();
    }

    public function inLogin($login)
    {
        $sql = "select * from registration where name =:name, password =:password";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',     $login->getName());
        $stmt->bindParam(':password', $login->getPassword());
        return $stmt->execute();
    }
}