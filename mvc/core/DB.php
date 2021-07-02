<?php

class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "quite_luxury";
    protected $result = NULL;

    // protected $username = "id15889535_quite_luxury_dbs";
    // protected $password = "Chau@Chau0402";
    // protected $dbname = "id15889535_quite_luxury";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
    public function execute($sql){
        $this->result =mysqli_query($this->con, $sql);
        //echo "abc1234".$this->result;
        return $this->result;
    }

    
    public function getData(){
        if($this->result){
            $data=mysqli_fetch_array($this->result);
        }
        else{
            $data=0;
        }
        return $data;
    }
    public function getAllData($table){
        $sql ="SELECT * FROM $table";
        $this->execute($sql);
        while($datas=$this->getData($table)){
            $data[]=$datas;
        }
        return $data;
    }
    public function getDataById($table, $id){
        $sql="SELECT * from $table where RoomID='$id'";
        $this->execute($sql);
        if($this->result){
          $data=mysqli_fetch_array($this->result);
        }
        else{
           $data=0;
        }
        return $data;
     }
}

?>