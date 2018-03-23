<?php

use app\Controller;
use app\models\Post;

class StartController extends Controller
{

        public function index(){
                echo Post::getValue('id', "id=1");
                return $this->view("index",[],"html");
        }

        public function about(){
                $text = "Привет!";
                return $this->view("about",['text' => $text]);
        }

}
