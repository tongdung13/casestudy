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
        include "src/view/admin/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET" ) {
            $categories = $this->bigs->categoryAll();
            include_once "src/view/admin/add.php";
        } else {
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $category_id = $_REQUEST['category_id'];
            move_uploaded_file($image_tmp, 'img/'.$image);
            $mobiles = new Mobile($name, $price, $image, $category_id);;
            $this->bigs->addMobile($mobiles);
            header('location: index.php?page=list');
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            $id = $_REQUEST['id'];
            $categories = $this->bigs->categoryAll();
            $up = $this->bigs->getMobileById($id);
            include_once "src/view/admin/update.php";
        } else {
            $id    = $_REQUEST['id'];
            $name  = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'image/'. $image);
            $category_id = $_REQUEST['category_id'];
            $newMobile = new Mobile($name, $price, $image, $category_id);
            $newMobile->setId($id);
            $this->bigs->updateMobile($newMobile);
            header('location: index.php?page=list');
        }
    }

    public function delete($id)
    {
        if ($_REQUEST['id']){
            $this->bigs->deleteMobile($id);
        }
        header('location: index.php?page=list');

    }

    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $bills = $this->bigs->getSearch($search);
        include "src/view/search.php";
    }



}