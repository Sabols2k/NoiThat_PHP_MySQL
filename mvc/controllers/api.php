<?php

class Api extends Controller{

    private $item_data;

    public function __construct() {
     
        // Session::init();
        $this->adminModel = $this->modeladmin("login");
        $this->accountModel= $this->modeladmin("account");
        
    }
    // function index(){
    //     $this->getView("Product", [
    //         "product" => $this->productModel->getProduct(),
    //         "cookies" => $this->item_data,
    //     ]);

    // }


    // function RoomTypeDetail($id)
    // {
    //     $model=$this->modeladmin("room");
    //     $data =  $model->getDataRoomById($id);

    //     $this->item_data = array(
    //         'RoomID' => $data['RoomID'],
    //         'RoomTypeID' => $data['RoomTypeID'],
    //         'RoomPrice' => $data['RoomPrice'],
    //         'Description' => $data['Description'],
    //         'RoomstatusID' => $data['RoomstatusID'],
    //     );

    //     $this->index();
    // }

    function AllRoomtype(){
        $model=$this->modeladmin("room");
        $data =  $model->getAllRoom();
        
        $myJSON = json_encode($data);

        echo $myJSON;
    }
    function RoomtypeId($id){
        $model=$this->modeladmin("room");
        $data =  $model->getDataRoomById($id);
        $myJSON = json_encode($data);

        echo $myJSON;
    }

} 

?>