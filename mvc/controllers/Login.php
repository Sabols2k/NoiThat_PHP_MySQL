<?php
use App\Request as RequestLib;
class Login extends Controller{

    public function index(){
        $this->view('login');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}