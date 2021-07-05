<?php

use App\Request as RequestLib;

class Register extends Controller
{

    public function index()
    {
        $this->view('register');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }
    public function create()
    {

        $_SESSION['function'] = 'user';
        $data['user'] = [
            'email' => '',
            'password' => '',
            'firstname' => '',
            'lastname' => '',
            'phone' => '',
            'password' => '',
            'avatar' => ''
        ];
        //Check for post
        if (isset($_POST['register'])) {

            $data['user'] = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'phone' => trim($_POST['phoneNumber']),
                'password' => trim($_POST['password']),
                'avatar' => "img_avatar.png",
            ];
            // echo $data['user'];
            // exit;
            $model = $this->modeladmin("user");
            $model->register(
                $data['user']['email'],
                $data['user']['password'],
                $data['user']['phone'],
                $data['user']['firstname'],
                $data['user']['lastname'],
                $data['user']['avatar']
            );
            echo "<script>window.location.href= '" . URL . 'login' . "'</script>";
        }
    }
}
