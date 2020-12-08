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
        $sql = "select * from registration";
        $stmt = $this->data->query($sql);
        $stmt->fetchAll();
    }



    public function addLogin($login)
    {
        $sql = "INSERT INTO registration (name, password, enterthepassword)
                VALUES (:name , :password, :enterthepassword)";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',            $login->getName());
        $stmt->bindParam(':password',        $login->getPassword());
        $stmt->bindParam(':enterthepassword',$login->getEnterThePassword());
        $stmt->fetch();

    }






}