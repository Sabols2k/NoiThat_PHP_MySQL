<?php
use App\Request as RequestLib;
class Logout extends Controller{

    // public function index(){

    //     $this->view('login');
    //     // require_once "./mvc/views/layout/gioi-thieu.php";
    // }
    public function index()
    {
        unset($_SESSION['user']['userid']);
        unset($_SESSION['user']['email']);
        unset($_SESSION['user']['firstname']);
        unset($_SESSION['user']['lastname']);
        unset($_SESSION['user']['img']);

        // $data['main']="Booking/view-booking";
        // header('location:'.URLuser.'login');
        echo "<script>window.location.href= '" . URL . 'login' . "'</script>";
        // $this->viewadmin("login");
    }
}