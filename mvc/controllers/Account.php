<?php
use App\Request as RequestLib;
class Account extends Controller{

    public function index(){
        $model = $this->modeladmin("user");
        $data['account'] =  $model->getAllUser();
        // print_r ($data['account']);
        $this->view('account', $data);
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

}