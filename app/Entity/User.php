<?php
namespace App\Entity;
class User{
    private $id;
    private $nom;
    private $email;
    private $password;
    public function __construct($nom,$email,$password){
        $this->nom=$nom;
        $this->email=$email;
        $this->password=$password;
    }
    public function setId($id){
         $this->id;
    }
    public function &__get($property){
        return $this->$property;
    }

}