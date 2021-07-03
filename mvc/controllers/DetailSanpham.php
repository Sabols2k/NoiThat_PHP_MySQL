<?php
use App\Request as RequestLib;
class DetailSanpham extends Controller{

    public function index(){
        $this->view('detail-sanpham');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}