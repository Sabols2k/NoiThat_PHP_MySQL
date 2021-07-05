<?php
class product extends DB{
    public function __construct()
	{
		parent::__construct();
	}
    public function InsertProduct($name, $img, $price, $category){
        $sql="INSERT INTO product(productid ,name,img,price,category) VALUES (NULL,'$name','$img','$price', '$category')";
        // $sql="CALL `InsertAccount`('$productname', '$password', '$img', '$email', '$firstname', '$lastname', '$address', '$country', '$phone', '$gender', '$birthday', '$roles')";
        echo $sql;
        return $this->execute($sql);
     }
    //  public function editbyId($id){

    //     $table= "room";
    //     $sql="UPDATE $table set RoomTypeID='$RoomTypeID',RoomPrice='$RoomPrice',RoomstatusID='$RoomStatus' WHERE RoomID='$id'";
    //   return $this->execute($sql);
    // }
    public function getDataProductById($id){
        $sql="SELECT * from `product` where `productid`='$id'";
        // $sql = "CALL `getDataAccountById`('$id')";
        $this->execute($sql);
        if($this->result){
            $data=mysqli_fetch_array($this->result);
        }
        else{
            $data=0;
        }
        
        return $data;
    }
     public function updateProduct($update_id,$name, $price, $category){
        $sql="UPDATE product set name= '$name',price='$price',category='$category' WHERE productid ='$update_id'";
        // $sql = "CALL `updateAccount`('$id', '$aproductID', '$aproductname', '$aPassword', '$aimg', '$aEmail', '$aFirstName', '$aLastName', '$aAddress', '$aCountry', '$aPhone', '$aGender', '$aBirthday')";
        // echo $sql; die();
        return $this->execute($sql);
     }
     public function DeleteProductById($id){

      $sql="DELETE from `product` WHERE `productid`='$id'";
    //   $sql="CALL `DeleteAccountById`($id);";
    
      $this->execute($sql);
     }
     public function getAllProduct(){
        $sql = "SELECT * FROM `product`";
    //   $sql ="CALL `viewaccount`()";
      $this->execute($sql);
      while($datas=$this->getData()){
          $data[]=$datas;
      }
      return $data;
      
    }
    public function searchProductbyName($value){
        $sql = "SELECT a.productid  FROM product as a WHERE a.name like '%$value%'; ";
        
        $this->execute($sql);
        // echo "1";
        while($datas=$this->getData()){
            // echo "2";
            $data[]=$datas;
        }
        // echo "3";
        return $data;
    }
}
