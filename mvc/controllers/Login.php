<?php
use App\Request as RequestLib;
class Login extends Controller{

    // public function index(){

    //     $this->view('login');
    //     // require_once "./mvc/views/layout/gioi-thieu.php";
    // }
    public function index()
    {

        $data = [
            'title' => 'Login page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if (isset($_POST['login'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];
            // print_r($data); die();
            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter a email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $model = $this->modellayout("loginuser");
                $user =  $model->login($data['email'], $data['password']);

                if (isset($user['email'])) {
                    $this->createUserSession($user);
                } else {
                    $data['passwordError'] = 'Password or email is incorrect. Please try again.';

                    $this->view('login', $data);
                }
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('login', $data);
    }
    
    public function createUserSession($user)
    {   
        
        $_SESSION['user']['type'] = 'user';
        $_SESSION['user']['userid'] =  $user['userid'];
        $_SESSION['user']['email'] = $user['email'];
        $_SESSION['user']['firstname'] = $user['firstname'];
        $_SESSION['user']['lastname'] = $user['lastname'];
        $_SESSION['user']['img'] = imgUser . $user['avatar'];
        // header('Location:'.URL);
        echo "<script>window.location.href= '" . URL. "home" . "'</script>";
    }

}