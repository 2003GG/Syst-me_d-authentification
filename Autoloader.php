<?php
class Autoloader{
     public static function register(){
        spl_autoload_register(static function($class){
            $fileName=$class.".php";
            if(file_exists($fileName)){
               require $fileName;
            }

        });
     }
}