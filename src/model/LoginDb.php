<?php


namespace App\model;


class LoginDb
{
    private $data;

    public function __construct()
    {
        $db = new Dbconnect();
        $this->data = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from login";
        $stmt = $this->data->query($sql);
        $stmt->fetchAll();
    }



    public function addLogin($login)
    {
        $sql = "INSERT INTO login (name, password, enterThePassword)
                VALUES (:name , :password, :enterThePassword)";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',            $login->getName());
        $stmt->bindParam(':password',        $login->getPassword());
        $stmt->bindParam(':enterThePassword',$login->getEnterThePassword());
        $stmt->execute();

    }






}