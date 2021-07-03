<?php
use App\Request as RequestLib;
class Register extends Controller{

    public function index(){
        $this->view('register');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}