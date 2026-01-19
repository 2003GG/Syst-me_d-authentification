<?php
declare(strict_types=1);

class Route{
    private array $routes=[];
    public function add($path,$handler){
        $this->routes[$path]=$handler;
    }
    public function dispatch($path){
        if(array_key_exists($path,$this->routes)){
            $handler=$this->routes[$path];
            call_user_func($handler);
        }
        else{
            echo "page not found";
        }
    }
}
