<?php

namespace app;

class Model
{

        protected static
                $table = null,
                $db;
        
        function __construct($db){
                $this->db = $db;
        }

        public static function setDBvar($db){
                self::$db = $db;
        }

        public static function getValue($column, $v){
                $q = mysqli_query(self::$db->link, "SELECT * FROM `" . self::$table . "` WHERE". $v);
                $qu = mysqli_fetch_assoc($q);
                //echo $q[0];
                return $qu;
        }
}
