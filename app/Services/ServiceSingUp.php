<?php
namespace App\Services;

use App\Entity\User;
use App\repository\UserRepository;

class ServiceSingUp
{
  private $UserRepository;

  public function __construct()
  {
    $this->UserRepository = new UserRepository();
  }
  public function CreatUser($nom, $email, $password)
  {
    $user = new User($nom, $email, $password);
    $this->UserRepository->Creat($user);
  }
  public function Find($nom, $email)
  {
    $result = $this->UserRepository->findUser($nom, $email);
    return $result;
  }
  public function findLogIn($email, $password)
  {
    $result = $this->UserRepository->fingLog($email, $password);
    return $result;
  }


}