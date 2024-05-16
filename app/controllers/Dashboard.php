<?php

use app\classes\AuthMiddleware;

class Dashboard extends Controller {


    public function __construct(){
        AuthMiddleware::check();
    }

    public function index(){
        $userRole = $_SESSION['userRole'];
        // $userRole=0;
        echo $userRole;
        if($userRole == 1){
            return $this->views('/index');
        }
        else{
            return $this->views('admin/dashboard');
        }
   }
   
   public function reports(){
       echo __METHOD__;
   }
   public function visitors(){
       echo  __METHOD__;
   }
}