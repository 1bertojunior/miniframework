<?php

    namespace App\Controllers;

    use MF\Controller\Action;

    class adminController extends Action{

        public function admin(){
          $this->render("index","layout2");
        }

        public function login(){
            $this->render("index", "layout2");
        }
    }
    
?>