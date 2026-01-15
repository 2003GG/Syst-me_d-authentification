<?php
namespace Controler\UserControler;
use DataConection;

class UserControler{
    private $connection;
    public function __construct(){
    $this->connection = Database::getInstance()->getConnection();
    }
    public function register(){
        $name=$_POST["fullName"];
        $email=$_POST["Email"];
        $password=$_POST["password"];
    }
}