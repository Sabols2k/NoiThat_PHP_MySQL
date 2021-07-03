<?php
class user extends DB{
    public function __construct()
	{
		parent::__construct();
	}
    public function InsertUser($email,$password, $phone, $firstname, $lastname, $address){
        $sql="INSERT INTO user(userid ,email,password,phone,firstname,lastname, address ) VALUES (NULL,'$email','$password','$phone', '$firstname','$lastname', '$address')";
        // $sql="CALL `InsertAccount`('$username', '$password', '$img', '$email', '$firstname', '$lastname', '$address', '$country', '$phone', '$gender', '$birthday', '$roles')";
        echo $sql;
        return $this->execute($sql);
     }
    //  public function editbyId($id){

    //     $table= "room";
    //     $sql="UPDATE $table set RoomTypeID='$RoomTypeID',RoomPrice='$RoomPrice',RoomstatusID='$RoomStatus' WHERE RoomID='$id'";
    //   return $this->execute($sql);
    // }
    public function getDataUserById($id){
        $sql="SELECT * from `user` where `userid`='$id'";
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
     public function updateUser($update_id,$email, $phone, $firstname,$lastname, $address){
        $sql="UPDATE user set email= '$email',phone='$phone',firstname='$firstname', lastname= '$lastname', address= '$address' WHERE userid ='$update_id'";
        // $sql = "CALL `updateAccount`('$id', '$auserID', '$aUsername', '$aPassword', '$aimg', '$aEmail', '$aFirstName', '$aLastName', '$aAddress', '$aCountry', '$aPhone', '$aGender', '$aBirthday')";
        // echo $sql; die();
        return $this->execute($sql);
     }
     public function DeleteUserById($id){

      $sql="DELETE from `user` WHERE `userid`='$id'";
    //   $sql="CALL `DeleteAccountById`($id);";
    
      $this->execute($sql);
     }
     public function getAllUser(){
        $sql = "SELECT * FROM `user`";
    //   $sql ="CALL `viewaccount`()";
      $this->execute($sql);
      while($datas=$this->getData()){
          $data[]=$datas;
      }
      return $data;
      
    }
    public function searchUsertbyFirstname($value){
        $sql = "SELECT a.userid  FROM user as a WHERE a.firstname like '%$value%'; ";
        
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
