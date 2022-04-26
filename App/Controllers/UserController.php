<?php



namespace App\Controllers;

use App\Models\Register;
use App\models\User;
use App\Validation\Validator;
use Database\DBConnexion;


class UserController extends Controller
{


    protected $db;


    public function login()
    {

        return $this->view('auth.login');
    }

    public function user()
    {
        return $this->view('user.index');
    }


    public function register()
    {
        return $this->view('auth.register');
    }


    public function registerPost()

    {

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
            $username = htmlentities($_POST['username']);
            $email = htmlentities($_POST['email']);
            $password = htmlentities($_POST['password']);
            $password_confirm = htmlentities($_POST['password_confirm']);

            $register =  (new Register($this->getDB()))->getByUseremail($email);

            if ($register == false) {
                if (strlen($username) <= 255) {
                    if (strlen($email) <= 255) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            if ($password == $password_confirm) {

                                $password = password_hash($password, PASSWORD_DEFAULT);


                                $addUser = (new Register($this->getDB()))->addUser($username, $email, $password);
                                header('Location: /login');
                            } else header('Location: /register?reg_err=password');
                        } else header('Location: /register?reg_err=email');
                    } else header('Location: /register?reg_err=email_lenght');
                } else header('Location: /register?reg_err=username_length');
            } else header('location: /register?reg_err=already');
        }
    }




    public function loginPost()
    {



        $validator = new Validator($_POST);


        $errors = $validator->validate([

            'username' => ['required', 'min:3'],
            'password' => ['required']
        ]);


        if ($errors) {

            $_SESSION['errors'][] = $errors;
            header('Location: /login');
            exit;
        }


        $user = (new User($this->getDB()))->getByUsername($_POST['username']);


        if (password_verify($_POST['password'], $user->password)) {

            $_SESSION['auth'] = (int) $user->admin;
            $_SESSION['id_user'] = $user->id;

            return header('Location: /admin/posts?success=true');
        } else {


            return header('Location: /login');
        }
    }

    public function logout()
    {

        session_destroy();

        return header('Location: /');
    }
}
