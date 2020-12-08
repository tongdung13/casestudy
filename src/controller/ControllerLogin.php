<?php


namespace App\controller;

use App\model\LoginDb;
use App\model\Login;
use App\model\MobileLogin;
use App\model\MobileLoginDb;


class ControllerLogin
{
    protected $logout;
    protected $login;

    public function __construct()
    {
        $this->logout = new LoginDb();
        $this->login = new  MobileLoginDb();
    }

    public function addLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
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
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include "src/view/Login.php";
        } else {
            $name = $_REQUEST['username'];
            $pass = $_REQUEST['password'];
            $login = new MobileLogin($name, $pass);
            $this->login->inLogin($login);
            if (isset($name) && isset($pass)){
                if ($name == '' || $pass == ''){
                    echo "<a href='?page=login'>moi nhap lai</a>";

                } else {

                    header('location: index.php?page=home');
                }
            }
        }


    }



}