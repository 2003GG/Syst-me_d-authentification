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
declare(strict_types=1);
$pars= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ;
require "Route.php";
$route=new Route();
$route->add("/");