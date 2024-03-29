<?php

namespace App\controller;

use App\model\Login;
use App\model\LoginDb;
use App\model\MobileLoginDb;

class ControllerLogin
{
    protected $logout;
    protected $login;

    public function __construct()
    {
        $this->logout = new LoginDb();
        $this->login = new MobileLoginDb();
    }

    public function addLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'src/view/addLogin.php';
        } else {

            $name = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $enterThePassword = $_REQUEST['enterThePassword'];
            $logins = new Login($name, $password, $enterThePassword);
            $this->logout->addLogin($logins);
            if (isset($name) && isset($password) && isset($enterThePassword)) {
                if ($name == '' || $password == '' || $enterThePassword == '') {
                    echo "<a href='?page=registration'>moi nhap lai</a>";
                } else {
                    header('location: index.php?page=login');
                }
            }
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/view/Login.php";
        } else {
            $name = $_REQUEST['name'];
            $pass = $_REQUEST['password'];
            $login = $this->login->inLogin($name);
            foreach ($login as $item){}
            if (!empty($login) && $item['password'] === $pass) {
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $pass;
                header('location: index.php?page=list');
            } else {
                echo "moi nhap lai";
            }
        }
    }
}
