<?php


namespace App\model;


class Dbconnect
{
    protected $dsn;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=colo";
        $this->user= "root";
        $this->pass= "123456@";
    }

    public function connect(){
        try {
            return new \PDO($this->dsn, $this->user, $this->pass);
        }
        catch (\PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }


}