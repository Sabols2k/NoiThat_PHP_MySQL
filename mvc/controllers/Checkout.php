<?php
use App\Request as RequestLib;
class Checkout extends Controller{

    public function index(){
        $this->view('checkout');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}