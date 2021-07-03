<?php
use App\Request as RequestLib;
class Cart extends Controller{

    public function index(){
        $this->view('cart');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}