<?php

namespace core;

class factoryRoutes 
{
    
        public static function route($route){
                if(class_exists($route)){
                        return new $route;
                }
                else {
                        return "not found";
                }
        }
        
        public function __construct(){}
}
