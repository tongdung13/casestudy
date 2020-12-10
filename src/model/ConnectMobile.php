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
        $sql = "select * from mobile inner join category on mobile.category_id = category.idd";
        $stmt = $this->data->query($sql);
        return $stmt->fetchAll();
    }
    public function categoryAll()
    {
        $sql = "select * from category";
        $stmt = $this->data->query($sql);
        return $stmt->fetchAll();
    }

    public function addMobile($mobile)
    {
        $sql = "INSERT INTO mobile (name, price, img,category_id) VALUES (:name,:price,:img,:category_id)";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',        $mobile->getName());
        $stmt->bindParam(':price',       $mobile->getPrice());
        $stmt->bindParam(':img',         $mobile->getImg());
        $stmt->bindParam(':category_id', $mobile->getCategory_id());
        $stmt->execute();
    }

    public function getMobileById($id)
    {
        $sql = "select * from mobile where id =:id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();


    }


    public function updateMobile($newMobiles)
    {

        $sql = "UPDATE mobile SET name=:name,price=:price,img=:img,category_id=:category_id WHERE id=:id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',        $newMobiles->getName());
        $stmt->bindParam(':price',       $newMobiles->getPrice());
        $stmt->bindParam(':img',         $newMobiles->getImg());
        $stmt->bindParam(':category_id', $newMobiles->getCategory_id());
        $stmt->bindParam(':id',          $newMobiles->getId());
        $stmt->execute();


    }

    public function deleteMobile($id)
    {
        $sql = "DELETE FROM mobile WHERE id =:id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getSearch($search)
    {
        $sql = "SELECT * FROM mobile inner join category on mobile.category_id = category.idd WHERE `name` LIKE '$search'";
        $stmt = $this->data->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }




}