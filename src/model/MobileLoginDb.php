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
        $sql = "select * from login";
        $stmt = $this->data->query($sql);
        return $stmt->fetchAll();
    }

    public function inLogin($user)
    {
        $sql = "select name,password from login where name =:name";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name', $user);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
