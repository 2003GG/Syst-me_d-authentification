<?php
require_once "vendor/autoload.php";
use App\Controler\UserControler;
$cont = new UserControler();
if (isset($_POST["singUp"])) {

  $cont->register();
}
if (isset($_POST["LogIn"])) {
  $cont->logIn();
}