<?php

namespace App\Controllers;


class ContactController extends Controller{

    public function welcome()
    {  
        return $this->view('contact.welcome'); 
    }
    

    // MEthodes
    public function sendMsg(string $username, string $msgUser , string $emailUser)
    
    {
        $username = $_POST['username'];
        $msgUser = $_POST['message'];
        $emailUser = $_POST['email'];

        
        if(isset($_POST['envoyer']))
        {
            if(!$username  && !$msgUser && !$emailUser)
            {
                $message = '
                <u>Nom de l\'expéditeur : </u>'. $username.' <br/>
                <u>Email de l\'expéditeur : </u>'. $emailUser.' <br/>
                <br/>
                '.nl2br($msgUser).'
                ';

                mail('toto@gmail.com', 'contact', $message);
            }
            
        }

     
        

        
    }


  
}