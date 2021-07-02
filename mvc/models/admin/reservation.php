<?php
class reservation extends DB{
    public function __construct()
	{
		parent::__construct();
	}
    public function InsertAccount($username, $password,$img, $email, $firstname, $lastname, $address, $country, $phone, $gender, $birthday, $roles){
        // $sql="INSERT INTO user(id,useName,passWord,level) VALUES (NULL,'$username','$password',0)";
        $sql="CALL `InsertAccount`('$username', '$password', '$img', '$email', '$firstname', '$lastname', '$address', '$country', '$phone', '$gender', '$birthday', '$roles')";
        return $this->execute($sql);
     }
    //  public function editbyId($id){

    //     $table= "room";
    //     $sql="UPDATE $table set RoomTypeID='$RoomTypeID',RoomPrice='$RoomPrice',RoomstatusID='$RoomStatus' WHERE RoomID='$id'";
    //   return $this->execute($sql);
    // }
    public function getDataAccountById( $id){
        // $sql="SELECT * from `admin` where `aAdminID`='$id'";
        $sql = "CALL `getDataAccountById`('$id')";
        $this->execute($sql);
        if($this->result){
            $data=mysqli_fetch_array($this->result);
        }
        else{
            $data=0;
        }
        
        return $data;
    }
     public function updateAccount($id,$aAdminID, $aUsername, $aPassword,$aimg, $aEmail, $aFirstName, $aLastName, $aAddress, $aCountry, $aPhone, $aGender, $aBirthday){
        // $sql="UPDATE admin set aAdminID='$aAdminID',aUsername= ' $aUsername',aPassword='$aPassword',aimg='$aimg', aEmail= '$aEmail',aFirstName='$aFirstName' ,aLastName='$aLastName' ,aAddress='$aAddress',aCountry='$aCountry',aPhone='$aPhone',aGender='$aGender',aBirthday='$aBirthday' WHERE aAdminID='$id'";
        $sql = "CALL `updateAccount`('$id', '$aAdminID', '$aUsername', '$aPassword', '$aimg', '$aEmail', '$aFirstName', '$aLastName', '$aAddress', '$aCountry', '$aPhone', '$aGender', '$aBirthday')";
        // echo $sql; die();
        return $this->execute($sql);
     }
     public function DeleteAccountById($id){
    //   $sql="DELETE from `admin` WHERE `aAdminID`='$id'";
      $sql="CALL `DeleteAccountById`($id);";
    
      $this->execute($sql);
     }
     public function getAllReservation(){
      $sql ="CALL `viewreservation`()";
    //   $sql= "SELECT * FROM reservationsagents";
      $this->execute($sql);
      while($datas=$this->getData('reservationsagents')){
          $data[]=$datas;
      }
      return $data;
    }
}
?>

