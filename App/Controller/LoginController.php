<?php

namespace App\Controller;

require 'App\Model\LoginModel.php';
require 'App\DBConnection\Config.php';

class LoginController{
    
    private $login = null;
            
    //NOTE: The Type of the parameter was behaving differently. It wound only accept by writting \App... 
    public function __construct(\App\Model\LoginModel $login) {
        $this->login = $login;
    }
    
    public function showPage(){
        require VIEW_DIR . '/pages/Login.php';  
    }
    
    public function invoke(){
        $result = $this->login->getLogin();
        if($result){
            //header('Location: Gallery.php');
            require VIEW_DIR . '/pages/GalleryPage.php';  
        }else{
            die("Unable to login");
        }
        
    }
    
    
    
    
    
}
