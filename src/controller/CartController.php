<?php

namespace App\controller;
use App\model\ConnectMobile;

class CartController
{
    protected $db;

    public function __construct()
    {
        $this->db = new ConnectMobile();
    }



    public function index()
    {
        echo __METHOD__;
    }

    public function store($id)
    {
            
            $mobiles = $this->db->getMobileById($id);
            //$_SESSION['cart'][$id] = $mobile;
           if (empty($_SESSION['cart'])) {
               $mobiles['qty'] = 1;
               $_SESSION['cart'][$id] = $mobiles;
           } else {
               $mobiles['qty'] = $_SESSION['cart'][$id]['qty'] + 1;
               $_SESSION['cart'][$id] = $mobiles;
           }
        include "src/view/Cart.php";
          echo '<pre>';
          print_r($_SESSION['cart'][$id]);
    }
}

