<?php
class booking extends DB{
  public function __construct()
	{
		parent::__construct();
	}
    public function InsertBooking($name, $mail,$phone, $country, $dateCheckIn, $dateCheckOut, $numberAdult, $numberChildren, $roomtype, $Decription, $roomcount){
      $sql="CALL `insertbookingfull1`('$name', '$mail', '$phone','$country', '$dateCheckIn', '$dateCheckOut', '$numberAdult', '$numberChildren', '$roomtype', '$Decription', '$roomcount');";
      
      return $this->execute($sql);
    }
    
    // public function editbyId($id){

    //     $table= "room";
    //     $sql="UPDATE $table set RoomTypeID='$RoomTypeID',RoomPrice='$RoomPrice',RoomstatusID='$RoomStatus' WHERE RoomID='$id'";
    //   return $this->execute($sql);
    // }
    public function getDataBookingById( $id){
        $sql="SELECT * from bookings where bBookingID='$id'";
        $this->execute($sql);
        if($this->result){
          $data=mysqli_fetch_array($this->result);
        }
        else{
           $data=0;
        }
        
        return $data;
     }
     public function updateBooking($id,$BookingID, $GuestID, $ReservationAgentID, $DateCheckIn, $DateCheckOut, $RoomCount){
        $sql="UPDATE bookings set bBookingID='$BookingID',bGuestID= ' $GuestID',bReservationAgentID='$ReservationAgentID', bDateCheckIn= '$DateCheckIn',bDateCheckOut='$DateCheckOut' ,bRoomCount='$RoomCount' WHERE bBookingID='$id'";
        // $sql="CALL updateRoom($id,$roomID,$RoomTypeID,$RoomPrice,$Description,$RoomstatusID)";
        // echo $sql; die();
        return $this->execute($sql);
     }
     public function DeleteBookingById($id){
      // $sql="DELETE from bookings WHERE bBookingID='$id'";
      $sql="CALL `DeleteBookingById`($id); ";

      $this->execute($sql);
     }
     public function getAllBooking(){
      // $sql ="SELECT * FROM bookings";
      $sql= "CALL `viewbooking`();";
      $this->execute($sql);
      while($datas=$this->getData()){
          $data[]=$datas;
      }
      return $data;
    }
    public function confirm($id){
      $sql="CALL `ConfirmBookingById`($id); ";
      // echo $sql; die();
      $this->execute($sql);
    }
    public function checkin($id){
      $sql="CALL `CheckInBookingById`($id); ";
      // echo $sql; die();
      $this->execute($sql);
    }
    public function checkout($id){
      $sql="CALL `CheckOutBookingById`($id); ";
      // echo $sql; die();
      $this->execute($sql);
    }

    
    
}
?>
