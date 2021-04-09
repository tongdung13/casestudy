<?php

namespace App\controller;

use App\model\Category;
use App\model\CategoryDb;

class CategoryController
{
    protected $data;

    public function __construct()
    {
        $this->data = new CategoryDb();
    }

    public function getCreate()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include 'src/view/admin/Category.php';
        } else {
            $name = $_REQUEST['categoryName'];
            $category = new Category($name);
            $this->data->add($category);
            header('location: index.php?page=list');
        }

    }

}
