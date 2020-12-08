<?php


namespace App\controller;

use App\model\Mobile;
use App\model\ConnectMobile;
use function Composer\Autoload\includeFile;

class ControllerMobile
{
    protected $bigs;

    public function __construct()
    {
        $this->bigs = new ConnectMobile();
    }

    public function index(){
        $big = $this->bigs->getAll();
        include "src/view/home.php";

    }

    public function More()
    {
        $big = $this->bigs->getAll();
        include "src/view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET" ) {
            include_once "src/view/add.php";
        } else {
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'.$image);
            $category = $_REQUEST['category_id'];
            $mobiles = new Mobile($name, $price, $image, $category);
            $this->bigs->addMobile($mobiles);
            header('location: index.php?page=home');
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            $id = $_REQUEST['id'];
            $up = $this->bigs->getMobileById($id);
            include_once "src/view/update.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'. $image);
            $category = $_REQUEST['category'];
            $newMobile = new Mobile($name, $price, $image, $category);
            $newMobile->setId($id);
            $this->bigs->updateMobile($newMobile);
            header('location: index.php');
        }
    }

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            $id = $_REQUEST['id'];
            $this->bigs->deleteMobile($id);
            include "src/view/delete.php";
        }else {
            header('location: index.php');
        }
    }

    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $bills = $this->bigs->getSearch($search);
        include "src/view/search.php";
    }



}