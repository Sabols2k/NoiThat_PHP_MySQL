<?php
use App\Request as RequestLib;
class GioiThieu extends Controller{

    public function index(){
        $this->view('gioi-thieu');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}