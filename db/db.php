<?php

namespace db;

class db
{
        public
                $host,
                $user_name,
                $pass,
                $name,
                $link;


        function __construct($config){
                $this->host      = $config['host'];
                $this->user_name = $config['user_name'];
                $this->pass      = $config['pass'];
                $this->name      = $config['name'];
                $this->connect($this->host, $this->user_name, $this->pass, $this->name);
        }

        public function connect($host="localhost", $user_name="root", $pass="", $name="db"){
                $link = mysqli_connect($this->host, $this->user_name, $this->pass, $this->name);
                $this->link = $link;
        }
        public function close($link){
                mysqli_close($this->link);
        }

}
