<?php

namespace App\Controllers;

use Database\DBConnexion;

abstract class  Controller {

    protected $db;

    public function __construct(DBConnexion $db)
    {
       if (session_status() === PHP_SESSION_NONE){
             session_start();
       }
    
        $this->db = $db;

    }


    public function view(string $path, array $params = null)
    {
       
        
        ob_start();

        $path = str_replace('.' , DIRECTORY_SEPARATOR , $path);

        require VIEWS . $path .'.php';

        $content = ob_get_clean();
        require VIEWS . 'layout.php';
    }

    public function getDB() {
        
        return $this->db;
    }

     protected function isAdmin()

    {
        $sesAuth = filter_var($_SESSION['auth']);
        $sesIdUser = filter_var($_SESSION['id_user']);
        
        
        if(isset($session) && $session === 1){

            return $sesIdUser;

        }
        if(isset($_SESSION['auth']) && $_SESSION['auth'] === 0){

            
            return header('Location: /user');

        }
        
        else {
           return header('Location: /login');
        }
    }
}