<?php
use App\Request as RequestLib;
class notfound extends Controller{

    public function index(){
        $this->view('404notfound');
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}