<?php

namespace framework\core;

class router
{
        public
                $uri,
                $routes,
                $config,
                $app;


        function __construct($routes, $config){
                $this->uri = $this->uri = trim(urldecode(preg_replace('/\?.*/iu','',$_SERVER['REQUEST_URI'])));
                $this->routes = $routes;
                $this->app = false;
                $this->config = $config;
                $this->findController($routes, $config);
        }


        public function findController($routes, $config){
                foreach($routes as $route => $controller){
                        //$params = explode('|', $route);
                        //print_r($params);
                        $pattern = "#^/" . $config['name']. $route . "$#i";
                        $patternWith = "#^" . $config['name']. $route . "/$#i";
                        if(preg_match($pattern, $this->uri) || preg_match($patternWith, $this->uri)){
                                //$params = explode('|', $route);
                                //print_r($params);
                                $this->app = explode("@", $controller);
                                break;
                        } else {
                                $this->app = false;
                        }
                }

                if($this->app === false){
                        if($config['debug'] == true){
                                require(DEBUG . "/layouts/undef_url.php");
                        } else {
                                require(ROOT . "/public/views/errors/notfound.html");
                        }
                
                }

        }
}
