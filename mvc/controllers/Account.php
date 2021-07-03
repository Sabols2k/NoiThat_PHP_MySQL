<?php
use App\Request as RequestLib;
class Account extends Controller{

    public function index(){
        $this->view('account');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}