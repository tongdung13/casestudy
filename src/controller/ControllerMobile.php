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
            $categorys = $this->bigs->categoryAll();
            include_once "src/view/add.php";
        } else {
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $image = $_FILES['img']['name'];
            $image_tmp = $_FILES['img']['tmp_name'];
            $categoryName = $_REQUEST['categoryName'];
            move_uploaded_file($image_tmp, 'img/'.$image);

            $mobiles = new Mobile($name, $price, $image,$categoryName);
            $this->bigs->addMobile($mobiles);
            header('location: index.php?page=home');
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            $id = $_REQUEST['id'];
            $categorys = $this->bigs->categoryAll();
            $up = $this->bigs->getMobileById($id);
            include_once "src/view/update.php";
        } else {
            $id    = $_REQUEST['id'];
            $name  = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $image = $_FILES['img']['name'];
            $image_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'. $image);
            $category_id = $_REQUEST['categoryName'];
            $newMobile = new Mobile($name, $price, $image,$category_id);
            $newMobile->setId($id);
            $this->bigs->updateMobile($newMobile);
            header('location: index.php?page=home');
        }
    }

    public function delete($id)
    {
        if ($_REQUEST['id']){
            $this->bigs->deleteMobile($id);

        }
        header('location: index.php?page=home');

    }

    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $bills = $this->bigs->getSearch($search);
        include "src/view/search.php";
    }



}