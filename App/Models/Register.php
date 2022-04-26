<?php


namespace App\Models;


class Register extends Model{

    protected $table = 'users';
    
  
    public function getByUseremail(string $email)

    {

        return $this->query("SELECT * FROM {$this->table} WHERE username = ?", [$email], true);
       
    }

    public function addUser(string $username, string $email, string $password)

    {
      $username = htmlentities($username);
      $email = htmlentities($email);
      $password = htmlentities($password);

        return $req =  $this->query( "INSERT INTO {$this->table} (username, email, password) VALUES ('$username', '$email',  '$password')");
       
         
    }


}