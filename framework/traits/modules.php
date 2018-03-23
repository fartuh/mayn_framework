<?php

namespace traits;

trait modules 
{
        
        public function view($path, $vars=[], $fmt="php"){
                foreach($vars as $var => &$value){
                        $$var = $value;
                }
                $config = require(CONFIG . "/web.config.php");
                require(ROOT . "/public/views/" . $path . ".$fmt");
        }

}
