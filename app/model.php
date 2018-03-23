<?php

class
{

        public function connect($host="localhost", $user_name="root", $pass="", $name="db"){
                $link = mysqli_connect($host, $user_name, $pass, $name);
                return $link;
        }
        public function close($link){
                mysqli_close($link);
                return true;
        }

}
