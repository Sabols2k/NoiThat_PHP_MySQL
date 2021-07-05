<?php

use App\Request as RequestLib;

class Checkout extends Controller
{

    public function index()
    {
        $model = $this->modeladmin("user");
        $id = $_SESSION['user']['userid'];
        $data['user'] =  $model->getDataUserById($id);
        // print_r ($data['user']);
        $this->view('checkout', $data);
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

    public function create()
    {
        $data['bill'] = [
            'userid' => '',
            'totalprice' => '',
            'createdAt' => '',
        ];
        $data['billdetail'] = [
            'billid ' => '',
            'productid ' => '',
            'quantily' => '',
            'price' => '',
        ];
        echo $_SESSION['user']['userid'];
        if (isset($_POST['totalPrice']) && isset($_POST['detail'])) {
            
            $data['bill'] = [
                'userid' => trim($_SESSION['user']['userid']),
                'totalprice' => trim($_POST['totalPrice']),
                'createdAt' => date("Y-m-d", time())
            ];
            $length = $_POST['length'];
            $model = $this->modeladmin("bill");
            $model->InsertBill(
                $data['bill']['userid'],
                $data['bill']['totalprice'],
                $data['bill']['createdAt']
            );
            $maxid = $model->getmaxBillidById();
            // echo "aa";
            for ($x = 0; $x <  $length; $x++) {
                echo "The number is: $x <br>";
                $data['billdetail'] = [
                    'billid' => $maxid['0'],
                    'productid' => trim($_POST['detail'][$x]['id']),
                    'quantily' => trim($_POST['detail'][$x]['quantity']),
                    'price' => trim($_POST['detail'][$x]['price']),
                ];
                // print_r ( $data['billdetail']); 
                // $model = $this->modeladmin("bill");
                $model->InsertBillDetail(
                    $data['billdetail']['billid'],
                    $data['billdetail']['productid'],
                    $data['billdetail']['quantily'],
                    $data['billdetail']['price']
                );
            }
        }
    }
}
