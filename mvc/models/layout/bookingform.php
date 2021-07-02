<?php
class bookingform extends DB{
  public function __construct()
	{
		parent::__construct();
    }
    public function demphongtrong(){
        // $sql ="SELECT * FROM bookings";
        $sql ="CALL `DemPhongTrong`()";
        $this->execute($sql);
        while($datas=$this->getData('bookings')){
            $data[]=$datas;
        }
        return $data;
      }

      public function insertbookingfull1($name, $mail,$phone, $country, $dateCheckIn, $dateCheckOut, $numberAdult, $numberChildren, $roomtype, $Decription, $roomcount){
        $sql="CALL `insertbookingfull1`('$name', '$mail', '$phone','$country', '$dateCheckIn', '$dateCheckOut', '$numberAdult', '$numberChildren', '$roomtype', '$Decription', '$roomcount');";
        
        return $this->execute($sql);
      }
      public function insertbookingfull2($name, $mail,$phone, $country, $dateCheckIn, $dateCheckOut, $numberAdult, $numberChildren, $roomtype, $Decription, $roomcount, $roomtype2,$roomcount2 ){
        $sql="CALL `insertbookingfull2`('$name', '$mail','$phone', '$country', '$dateCheckIn', '$dateCheckOut', '$numberAdult', '$numberChildren', '$roomtype', '$Decription', '$roomcount','$roomtype2', '$roomcount2');";
        // echo $sql; die();
        return $this->execute($sql);
      }

}

?>