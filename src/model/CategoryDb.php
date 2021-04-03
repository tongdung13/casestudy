<?php

namespace App\model;

class CategoryDb
{
    protected $data;

    public function __construct()
    {
        $db = new Dbconnect();
        $this->data = $db->connect();
    }

    public function add ($category)
    {
        $sql = "INSERT INTO category (categoryName) VALUES (:categoryName)";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':categoryName', $category->getCategoryName());
        $stmt->execute();
    }
}

