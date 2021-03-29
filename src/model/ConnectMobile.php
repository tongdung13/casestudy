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
        $sql = "SELECT * FROM mobile INNER JOIN category ON mobile.category_id = category.id_category";
        $stmt = $this->data->query($sql);
        return $stmt->fetchAll();
    }
    public function categoryAll()
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->data->query($sql);
        return $stmt->fetchAll();
    }

    public function addMobile($mobile)
    {
        $sql = "INSERT INTO mobile (name, price, image, category_id) VALUES (:name, :price, :image, :category_id)";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',        $mobile->getName());
        $stmt->bindParam(':price',       $mobile->getPrice());
        $stmt->bindParam(':image',       $mobile->getImage());
        $stmt->bindParam(':category_id', $mobile->getCategory_id());
        $stmt->execute();
    }

    public function getMobileById($id)
    {
        $sql = "SELECT * FROM mobile WHERE id = :id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }


    public function updateMobile($newMobiles)
    {
        $sql = "UPDATE mobile SET name = :name, price = :price, image = :image, category_id = :category_id WHERE id = :id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',        $newMobiles->getName());
        $stmt->bindParam(':price',       $newMobiles->getPrice());
        $stmt->bindParam(':image',       $newMobiles->getImage());
        $stmt->bindParam(':category_id', $newMobiles->getCategory_id());
        $stmt->bindParam(':id',          $newMobiles->getId());
        $stmt->execute();
    }

    public function deleteMobile($id)
    {
        $sql = "DELETE FROM mobile WHERE id = :id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getSearch($search)
    {
        $sql = "SELECT * FROM mobile INNER JOIN category ON mobile.category_id = category.id_category WHERE `name` LIKE '$search'";
        $stmt = $this->data->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }




}