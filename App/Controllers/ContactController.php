<?php

namespace App\Controllers;


class ContactController extends Controller{

    public function welcome()
    {  
        return $this->view('contact.welcome'); 
    }
    

    // MEthodes
    public function sendMsg()
    
    {

       
        $username = htmlentities(filter_input(INPUT_POST,'username'));
        $msgUser = htmlentities(filter_input(INPUT_POST,'message'));
        $emailUser = htmlentities(filter_input(INPUT_POST,'email'));

        
      
        if(isset($_POST['envoyer']))
        { 
            if(!empty($username)  && !empty($msgUser) && !empty($emailUser))
            {
                $message = '
                <u>Nom de l\'expéditeur : </u>'. $username.' <br/>
                <u>Email de l\'expéditeur : </u>'. $emailUser.' <br/>
                <br/>
                '.nl2br($msgUser).'
                ';

                mail('toto@gmail.com', 'contact', $message);

                return header('Location: /');
            }
             
            
        } else {

            return header('Location: /posts/contact');
        }

     

     
        

        
    }


  
}