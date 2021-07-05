<?php
class account extends DB{
    public function __construct()
	{
		parent::__construct();
	}
    public function InsertAccount($email,$password, $phone, $firstname, $lastname, $avatar){
        $sql="INSERT INTO admin(adminid ,email,password,phone,firstname,lastname, avatar ) VALUES (NULL,'$email','$password','$phone', '$firstname','$lastname', '$avatar')";
        // $sql="CALL `InsertAccount`('$username', '$password', '$img', '$email', '$firstname', '$lastname', '$address', '$country', '$phone', '$gender', '$birthday', '$roles')";
        // echo $sql;
        return $this->execute($sql);
     }
    //  public function editbyId($id){

    //     $table= "room";
    //     $sql="UPDATE $table set RoomTypeID='$RoomTypeID',RoomPrice='$RoomPrice',RoomstatusID='$RoomStatus' WHERE RoomID='$id'";
    //   return $this->execute($sql);
    // }
    public function getDataAccountById($id){
        $sql="SELECT * from `admin` where `adminid`='$id'";
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
     public function updateAccount($update_id,$email, $phone, $firstname,$lastname){
        $sql="UPDATE admin set email= '$email',phone='$phone',firstname='$firstname', lastname= '$lastname' WHERE adminid ='$update_id'";
        // $sql = "CALL `updateAccount`('$id', '$aAdminID', '$aUsername', '$aPassword', '$aimg', '$aEmail', '$aFirstName', '$aLastName', '$aAddress', '$aCountry', '$aPhone', '$aGender', '$aBirthday')";
        // echo $sql; die();
        return $this->execute($sql);
     }
     public function DeleteAccountById($id){

      $sql="DELETE from `admin` WHERE `adminid`='$id'";
    //   $sql="CALL `DeleteAccountById`($id);";
    
      $this->execute($sql);
     }
     public function getAllAccount(){
        $sql = "SELECT * FROM `admin`";
    //   $sql ="CALL `viewaccount`()";
      $this->execute($sql);
      while($datas=$this->getData()){
          $data[]=$datas;
      }
      return $data;
      
    }
    public function searchAccountbyUsername($value){
        $sql = "SELECT a.adminid  FROM admin as a WHERE a.firstname like '%$value%'; ";
        
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
