<?php

use App\Request as RequestLib;

class sanpham extends Controller
{


    public function index()
    {
        $model = $this->modeladmin("product");
        $data['product'] =  $model->getAllProduct();
        header('Content-type: application/json');
        $myJSON = json_encode($data['product']);

        echo $myJSON;
    }
    public function detail($id)
    {
        $_SESSION['function'] = 'product';

        $model = $this->modeladmin("product");
        $data['product'] = $model->getDataProductById($id);
        // print_r($data['product']);
        $this->view("detail-sanpham", $data);
    }
    
}
