<?php


namespace App\model;


class ConnectMobile
{
    protected $data;

    public function __construct()
    {
        $db = new Dbconnect();
        $this->data = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from mobile";
        $stmt = $this->data->query($sql);
        return $stmt->fetchAll();
    }

    public function addMobile($mobile)
    {
        $sql = "INSERT INTO mobile (name, price, image, category) VALUES (:name,:price,:image,:category)";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',     $mobile->getName());
        $stmt->bindParam(':price',    $mobile->getPrice());
        $stmt->bindParam(':image',    $mobile->getImage());
        $stmt->bindParam(':category', $mobile->getCategory());
        $stmt->execute();
    }

    public function getMobileById($id)
    {
        $sql = "select * from mobile where id =:id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;

    }

    public function updateMobile($newMobiles)
    {

        $sql =
        "UPDATE `mobile` SET `name`=:name,`price`=:price,`image`=:image,`category`=:category WHERE id=:id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',     $newMobiles->getName());
        $stmt->bindParam(':price',    $newMobiles->getPrice());
        $stmt->bindParam(':image',    $newMobiles->getImage());
        $stmt->bindParam(':category', $newMobiles->getCategory());
        $stmt->bindParam(':id',       $newMobiles->getId());
        $stmt->execute();

    }

    public function deleteMobile($id)
    {
        $sql = "DELETE FROM `mobile` WHERE id =:id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getSearch($search)
    {
        $sql = "select * from mobile where name like %$search%";
        $stmt = $this->data->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }




}