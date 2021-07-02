<?php
class room extends DB{
  public function __construct()
	{
		parent::__construct();
	}
    public function InsertRoom($Roomnumber,$RoomType,$Description){
        // $sql="INSERT INTO `room` (`RoomID`, `RoomTypeID`, `RoomPrice`, `Description`, `RoomstatusID`) VALUES (NULL,'$RoomTypeID', '$RoomPrice','$Description', '$RoomstatusID')";
        $sql="CALL `insertRoom`('$Roomnumber', '$RoomType', '$Description')";
        // echo $sql; die();
        return $this->execute($sql);
    }
    // public function editbyId($id){

    //     $table= "room";
    //     $sql="UPDATE $table set RoomTypeID='$RoomTypeID',RoomPrice='$RoomPrice',RoomstatusID='$RoomStatus' WHERE RoomID='$id'";
    //   return $this->execute($sql);
    // }
    public function getDataRoomById( $id){
        // $sql="SELECT * from room where RoomID='$id'";
        $sql= "CALL `getDataRoomById`('$id')";
        $this->execute($sql);
        if($this->result){
          $data=mysqli_fetch_array($this->result);
        }
        else{
           $data=0;
        }
        
        return $data;
     }
     public function updateRoom($id,$roomID,$roomnumber, $roomtypeid, $Description, $RoomStatus){
        // $sql="UPDATE `room` set `RoomID`='$roomID', `RoomTypeID`= ' $roomtypeid',`RoomPrice`='$RoomPrice', `Description`= '$Description', `RoomstatusID`='$RoomStatus' WHERE RoomID='$id'";
        $sql=" CALL ` updateRoom`('$id', '$roomID','$roomnumber', '$roomtypeid', '$Description', '$RoomStatus')";
        // echo $sql; die();
        return $this->execute($sql);
     }
     public function DeleteRoomById($id){
      // $sql="DELETE from room WHERE RoomID='$id'";
      $sql="CALL DeleteRoomById($id) ";
      $this->execute($sql);
     }
     public function getAllRoom(){
      // $sql ="SELECT * FROM room";
      $sql= "CALL `viewroom`()";
      $this->execute($sql);
      while($datas=$this->getData('room')){
          $data[]=$datas;
      }
      return $data;
    }
    public function searchRoombyNumb($value){
      $sql ="CALL `searchRoombyNumb`('%$value%');";
      // echo $sql; die();
      $this->execute($sql);
      while($datas=$this->getData('room')){
          $data[]=$datas;
      }
      return $data;
    }
}
?>
