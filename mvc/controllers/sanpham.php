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
}
?>