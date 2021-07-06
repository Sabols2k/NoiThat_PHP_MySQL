<?php
use App\Request as RequestLib;
class Search extends Controller{

    public function index(){
        if (isset($_GET['query'])) {
            $data['query'] = trim($_GET['query']);
            $model = $this->modeladmin("product");
            $a =  $model->searchProductbyName($data['query']);
            // print_r($a); die();
            // echo $data['query']; die();
            if (($data['query'] !== "")) {
                if (isset($a)) {
                    $stt = 0;
                    foreach ($a as $name) {
                        // print_r($name['0']);
                        $model = $this->modeladmin("product");
                        $data['product'][$stt] = $model->getDataProductById($name['0']);
                        $stt++;
                    }
                    // print_r ($data['product']);
                    // die();
                    $this->view('search', $data);
                } else {
                    $model = $this->modeladmin("product");
                    $data['product'] =  NULL;
                    $this->view('search', $data);
                }
                // $len=strlen($data['query']);

                // print_r($a); die();

            } else {
                $model = $this->modeladmin("product");
                $data['product'] =  $model->getAllProduct();
                $this->view('search', $data);
            }
        }
        $this->view('search', $data);
    }

}