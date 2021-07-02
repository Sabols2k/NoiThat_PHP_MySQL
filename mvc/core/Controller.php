<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/". $model .".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }

    // admin
    public function viewadmin($view1, $data=[]){
        require_once "./mvc/views/admin/".$view1.".php";
    }
    public function modeladmin($model){
        require_once "./mvc/models/admin/".$model.".php";
        return new $model;    
    }

    //layout 
    public function modellayout($model){
        require_once "./mvc/models/layout/".$model.".php";
        return new $model;    
    }
    
}
?>