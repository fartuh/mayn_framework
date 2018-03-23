<?php

use app\Controller;

class StartController extends Controller
{

        public function index(){
                return $this->view("index", "html");
        }

        public function about(){
                $text = "Привет!";
                return $this->view("about",['text' => $text]);
        }

}
