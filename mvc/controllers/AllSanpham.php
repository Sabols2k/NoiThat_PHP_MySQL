<?php
use App\Request as RequestLib;
class AllSanpham extends Controller{

    public function index(){
        $this->view('all-sanpham');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }


}