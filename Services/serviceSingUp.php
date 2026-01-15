<?php 
namespace Services;

use User\User;
use UserReopsitory\ UserRepository;

class ServicesingUp{
  private $UserRepository;

  public function __construct(){
    $this->UserReopsitory=new UserRepository();
  }
  

public function CreatUser(){
  $name=$_POST["fullName"];
  $email=$_POST["Email"];
  $password=password_hash($_POST["password"]);
  $user=new User($name,$email,$password);
  $result=$this->UserRepository->Creat($user);

}
public function Find(){
   $nom=$_POST["fullName"];
   $email=$_POST["Email"];
   $password=$_POST["password"];
   $user=new User($nom,$email,$password);
   $result=$this->UserReopsitory->findUser($nom,$email,$password);
 

}


}