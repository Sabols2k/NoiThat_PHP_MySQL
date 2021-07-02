<?php

class Booking extends Controller{
    public function __construct() {
        // Session::init();
    }
    public function index(){
        $data['booking'] = [
            'Name' =>'',
            'Mail' => '',
            'Phonenumber' => '', 
            'Country' => '',
            'DateCheckIn' => '',
            'DateCheckOut' => '',
            'NumberAdult' => '',
            'NumberChildren' => '',
            'RoomType' => '',
            'Description' => '',
            'NameError' =>'',
            'MailError' => '',
            'PhonenumberError' => '', 
            'CountryError' => '',
            'DateCheckInOutError' => '',
            'NumberPeopleError' => '',
            'RoomTypeError' => '',
            // 'DescriptionError' => '',

        ];
    
        //Check for post
        if(isset($_POST['bookingform'])) {
            //Sanitize post data
            
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // $datechekInOut= trim($_POST['booking-date']);
            $datechekInOut = explode('-',trim($_POST['booking-date']));
            $data['booking'] = [
                'Name' =>trim($_POST['bookingname']),
                'Mail' => trim($_POST['booking-email']),
                'Phonenumber' => trim($_POST['booking-phone']), 
                'Country' => trim($_POST['booking-country']),
                'DateCheckIn' => trim($datechekInOut['2'])."-".trim($datechekInOut['1'])."-".trim($datechekInOut['0']),
                'DateCheckOut' => trim($datechekInOut['5'])."-".trim($datechekInOut['4'])."-".trim($datechekInOut['3']),
                'NumberAdult' => trim($_POST['booking-adults']),
                'NumberChildren' => trim($_POST['booking-children']),
                'RoomType' => trim($_POST['booking-roomtype']),
                'Description' => trim($_POST['booking-comments']),
                
            
            ];
            if (empty($data['booking']['Name'])) {
                $data['booking']['NameError'] = '* Please type your name. Please try again.';
              
            }else{
                $data['booking']['NameError']="";
            }
            if (empty($data['booking']['Mail'])) {
                $data['booking']['MailError'] = '* Please type your mail. Please try again.';
              
            }else{
                $data['booking']['MailError']="";
            }
            if (empty($data['booking']['Phonenumber'])) {
                $data['booking']['PhonenumberError'] = '* Please type your phone. Please try again.';
              
            }else{
                $data['booking']['PhonenumberError']="";
            }
            if (empty($data['booking']['Country'])) {
                $data['booking']['CountryError'] = '* Please type your country. Please try again.';
              
            }else{
                $data['booking']['CountryError']="";
            }
            if (empty($data['booking']['DateCheckIn']) || empty($data['booking']['DateCheckOut'])) {
                $data['booking']['DateCheckInOutError'] = '* Please type your date check in or check out. Please try again.';
              
            }else{
                $data['booking']['DateCheckInOutError']="";
            }
            
            if (empty($data['booking']['NumberAdult']) && empty($data['booking']['NumberChildren'])) {
                $data['booking']['NumberPeopleError'] = '* Please type your number people. Please try again.';
              
            }else{
                $data['booking']['NumberPeopleError']="";
            }
            if (empty($data['booking']['RoomType'])) {
                $data['booking']['RoomTypeError'] = '* Please type your roomtype. Please try again.';
              
            }else{
                $data['booking']['RoomTypeError']="";
            }


            // print_r($data); die();
            if(empty($data['booking']['NameError'])){
                $this->createGuestSession($data['booking']);
                $data['booking']['NameError']="";
                // header('Location:'.URL. 'Booking/OfferBooking');
                echo "<script>window.location.href= '".URL. 'Booking/OfferBooking'."'</script>";
            }
            else  {
                $data['booking']['NameError'] = '* Please type your name. Please try again.';
                //  $this->view('layout/Booking-form', $data);
            }
            
        } 
        // $data['main'] ="Booking/add-booking";
        $this->view('layout/Booking-form', $data);
        // require_once "./mvc/views/layout/Booking-form.php";

    }
    function createGuestSession($guest){
        $_SESSION['guest']['name'] =  $guest['Name'] ;
        $_SESSION['guest']['mail'] = $guest['Mail'];
        $_SESSION['guest']['phone'] = $guest['Phonenumber'];
        $_SESSION['guest']['country'] = $guest['Country'];
        $_SESSION['guest']['dateCheckIn'] = $guest['DateCheckIn'];
        $_SESSION['guest']['dateCheckOut'] =$guest['DateCheckOut'];
        $_SESSION['guest']['numberAdult'] = $guest['NumberAdult'];
        $_SESSION['guest']['numberChildren'] = $guest['NumberChildren'];
        $_SESSION['guest']['roomtype'] = $guest['RoomType'];
        $_SESSION['guest']['Decription'] = $guest['Description'];
    }
    

    //ham dem so phong 
    function SL_Room($people, $maxguest){
        
        if($people % $maxguest ==0){
            $kq= floor($people / $maxguest);
        }
        else{
            $kq= floor($people / $maxguest) +1 ;
        }
        return $kq;
    }
    function SL_Room2($people, $maxguest){
        $kq= floor($people / $maxguest);
        return $kq;
    }
    // hàm này dùng để return ra maxguest và số phòng trống trong roomtype được chọn 
    function maxguest($roomtype){
        $model=$this->modellayout("bookingform");
        $data =  $model->demphongtrong();
        switch($roomtype){
            case 'Single Room':
                $kq['guest'] = $data['0']['rtMaxGuest'];
                $kq['roomremain']= $data['0']['SL_PhongTrong'];
                $kq['price'] = $data['0']['rRoomPrice'];
                $kq['img'] = $data['0']['rImg'];
                return $kq;
                break;
            case 'Double Room':
                $kq['guest'] = $data['1']['rtMaxGuest'];
                $kq['roomremain']= $data['1']['SL_PhongTrong'];
                $kq['price'] = $data['1']['rRoomPrice'];
                $kq['img'] = $data['1']['rImg'];
                return $kq;
                break;
            default:
                return $kq = NULL;
        }
    }
    function offer1(){
        $people= (int)$_SESSION['guest']['numberAdult'] + (int)$_SESSION['guest']['numberChildren'];
        // $people = 20;
        
        $model=$this->modellayout("bookingform");
        // Đếm số lượng phòng trống và maxguest của mỗi loại phòng 
        // $data['room'] =  $model->demphongtrong(); 
        // print_r($data['room']);
        $guest= $this->maxguest($_SESSION['guest']['roomtype']);
        
        if($people  <= ($guest['guest'] * $guest['roomremain']  )  )
        {
            // echo "du phong". $people;
            // viet ham dem so phong
            unset($_SESSION['offer']['offer1']);
            $roomtype= $_SESSION['guest']['roomtype'];
            $_SESSION['offer']['offermain']['roomtype']= $roomtype;
            $sl_room = $this->SL_Room($people,$guest['guest'] );
            $_SESSION['offer']['offermain']['roomcount']= $sl_room;
            $_SESSION['offer']['offermain']['price']= $guest['price'];
            $_SESSION['offer']['offermain']['img']= $guest['img'];


            $roomtype2= $_SESSION['guest']['roomtype'];
            $_SESSION['offer']['offersub']['roomtype']= $roomtype;
            $sl_room2 = $this->SL_Room($people,($guest['guest']/2) );
            $_SESSION['offer']['offersub']['roomcount']= $sl_room2;
            $_SESSION['offer']['offersub']['price']= $guest['price'];
            $_SESSION['offer']['offersub']['img']= $guest['img'];

        }
        else{
            unset($_SESSION['offer']['offermain']);
            unset($_SESSION['offer']['offersub']);
            $peopleremain = ((int)$people - (int)($guest['guest'] * $guest['roomremain']));
            $roomtype= $_SESSION['guest']['roomtype'];
             $_SESSION['offer']['offer1']['roomtype1'] = $roomtype;
            $sl_room1 = $guest['roomremain'];
            $_SESSION['offer']['offer1']['roomcount1']= $sl_room1;
            $_SESSION['offer']['offer1']['price1']= $guest['price'];
            $_SESSION['offer']['offer1']['img1']= $guest['img'];
            // echo "thieu phong cho:" . $peopleremain;
            switch($_SESSION['guest']['roomtype']){
                case 'Single Room':
                    // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                    $guest1= $this->maxguest('Double Room');
                    if($peopleremain  <= ($guest1['guest'] * $guest1['roomremain']  )  )
                    {

                         $_SESSION['offer']['offer1']['roomtype2'] = 'Double Room';
                      
                        $sl_room2 = $this->SL_Room($peopleremain,$guest1['guest'] );
                         $_SESSION['offer']['offer1']['roomcount2']= $sl_room2;
                         $_SESSION['offer']['offer1']['price2']= $guest1['price'];
                         $_SESSION['offer']['offer1']['img2']= $guest1['img'];
                    }
                    else{
                        unset($_SESSION['offer']['offer1']);
                    }
                    
                    break;
                case 'Double Room':
                    // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                    $guest1= $this->maxguest('Single Room');
                    if($peopleremain  <= ($guest1['guest'] * $guest1['roomremain']  )  )
                    {

                         $_SESSION['offer']['offer1']['roomtype2'] = 'Single Room';
                        $sl_room2 = $this->SL_Room($peopleremain,$guest1['guest'] );
                        $_SESSION['offer']['offer1']['roomcount2']= $sl_room2;
                        $_SESSION['offer']['offer1']['price2']= $guest1['price'];
                        $_SESSION['offer']['offer1']['img2']= $guest1['img'];
                    }
                    else{
                        unset($_SESSION['offer']['offer1']);
                    }
                    
                    break;
                default:
                    echo "Please choose another room type!";
            }
           

        }
       
    }
    function offer2(){
        $people= (int)$_SESSION['guest']['numberAdult'] + (int)$_SESSION['guest']['numberChildren'];
        // $people = 17;
        $model=$this->modellayout("bookingform");
        $data['room'] =  $model->demphongtrong();


        $guest= $this->maxguest($_SESSION['guest']['roomtype']);
        

        // print_r($data['room']);
        // print_r ($_SESSION['guest']);
        // echo "Số người: " . $people;
        // echo "max guest: " .$guest['guest'];
        // echo "So phong con lai: " .$guest['roomremain'];
        // // print_r($guest);
        // echo "Ket qua:";

       
        // echo "ket qua: ". ((int)$people / (int)$maxguest);
        // // $maxguest = 
        // // echo $data['room']['0']['rtMaxGuest'];
        if($people  <= ($guest['guest'] * $guest['roomremain']  )  )
        {
            unset($_SESSION['offer']['offer2']);
            $roomtype= $_SESSION['guest']['roomtype'];
            $_SESSION['offer']['offermain']['roomtype']= $roomtype;
            $sl_room = $this->SL_Room($people,$guest['guest'] );
            $_SESSION['offer']['offermain']['roomcount']= $sl_room;
            $_SESSION['offer']['offermain']['price']= $guest['price'];
            $_SESSION['offer']['offermain']['img']= $guest['img'];

            $roomtype2= $_SESSION['guest']['roomtype'];
            $_SESSION['offer']['offersub']['roomtype']= $roomtype;
            $sl_room2 = $this->SL_Room($people,($guest['guest']/2) );
            $_SESSION['offer']['offersub']['roomcount']= $sl_room2;
            $_SESSION['offer']['offersub']['price']= $guest['price'];
            $_SESSION['offer']['offersub']['img']= $guest['img'];
        }
        else{
            unset($_SESSION['offer']['offermain']);
            unset($_SESSION['offer']['offersub']);
            $peopleremain = ((int)$people - (int)($guest['guest'] * $guest['roomremain']));
            $roomtype1= $_SESSION['guest']['roomtype'];
            $_SESSION['offer']['offer2']['roomtype1']= $roomtype1;
            $sl_room1 = $guest['roomremain'];
            $_SESSION['offer']['offer2']['roomcount1']= $sl_room1;
            
            // echo "thieu phong cho:" . $peopleremain;
            switch($_SESSION['guest']['roomtype']){
                case 'Single Room':
                    // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                    $guest2= $this->maxguest('Double Room');
                    if($peopleremain  <= ($guest2['guest'] * $guest2['roomremain']  )  )
                    {
                        // echo "du phong". $people;
                        // viet ham dem so phong
                        // echo 'Double Room';
                        // echo "" $peoplere; 
                         $_SESSION['offer']['offer2']['roomtype2'] = 'Double Room';
                         $sl_room2 = $this->SL_Room($peopleremain,$guest2['guest'] );
                         $_SESSION['offer']['offer2']['roomcount2']= $sl_room2;
                         $_SESSION['offer']['offer2']['price2']= $guest2['price'];
                         $_SESSION['offer']['offer2']['img2']= $guest2['img'];
                        
                         $guestroom2 = $sl_room2 * $guest2['guest'];
                         $guestroom1 = (int)($people - $guestroom2);
                         
                        $_SESSION['offer']['offer2']['roomtype1'] = 'Single Room';
                        $sl_room1 = $this->SL_Room($guestroom1,$guest['guest'] );
                        $_SESSION['offer']['offer2']['roomcount1']= $sl_room1;
                        $_SESSION['offer']['offer2']['price1']= $guest['price'];
                        $_SESSION['offer']['offer2']['img1']= $guest['img'];

                    }
                    else{
                        unset($_SESSION['offer']['offer2']);
                    }
                    
                    break;
                case 'Double Room':
                     // echo $_SESSION['guest']['numberAdult'] . $_SESSION['guest']['numberChildren'];
                     $guest2= $this->maxguest('Single Room');
                     if($peopleremain  <= ($guest2['guest'] * $guest2['roomremain']  )  )
                     {
                         // echo "du phong". $people;
                         // viet ham dem so phong
                        //  echo 'Single Room';
                         // echo "" $peoplere; 
                         //type 2
                         $_SESSION['offer']['offer2']['roomtype2'] = 'Single Room';
                         $sl_room2 = $this->SL_Room($peopleremain,$guest2['guest'] );
                         $_SESSION['offer']['offer2']['roomcount2']= $sl_room2;
                         $_SESSION['offer']['offer2']['price2']= $guest2['price'];
                         $_SESSION['offer']['offer2']['img2']= $guest2['img'];
                         // type 1
                        $guestroom2 = $sl_room2 * $guest2['guest'];
                        $guestroom1 = (int)($people - $guestroom2);
                        $_SESSION['offer']['offer2']['roomtype1'] = 'Double Room';
                        $sl_room1 = $this->SL_Room($guestroom1,$guest['guest'] );
                        $_SESSION['offer']['offer2']['roomcount1']= $sl_room1;
                        $_SESSION['offer']['offer2']['price1']= $guest['price'];
                        $_SESSION['offer']['offer2']['img1']= $guest['img'];
 
                     }
                     else{
                        unset($_SESSION['offer']['offer2']);
                     }
                    
                    break;
                default:
                    echo "Please choose another room type!";
            }
           

        }
       
    }
    function offer3(){
        $people= (int)$_SESSION['guest']['numberAdult'] + (int)$_SESSION['guest']['numberChildren'];
        // $people = 25;
        $model=$this->modellayout("bookingform");
        $data['room'] =  $model->demphongtrong();


        $guest= $this->maxguest($_SESSION['guest']['roomtype']);
        

        // print_r($data['room']);
        // print_r ($_SESSION['guest']);
        // echo "Số người: " . $people;
        // echo "max guest: " .$guest['guest'];
        // echo "So phong con lai: " .$guest['roomremain'];
        // // print_r($guest);
        // echo "Ket qua:";

       
        // echo "ket qua: ". ((int)$people / (int)$maxguest);
        // // $maxguest = 
        // // echo $data['room']['0']['rtMaxGuest'];
        if($people  <= ($guest['guest'] * $guest['roomremain']  )  )
        {
            // echo "du phong". $people;
            // viet ham dem so phong
            unset($_SESSION['offer']['offer3']);
            $roomtype= $_SESSION['guest']['roomtype'];
            $_SESSION['offer']['offermain']['roomtype']= $roomtype;
            $sl_room = $this->SL_Room($people,$guest['guest'] );
            $_SESSION['offer']['offermain']['roomcount']= $sl_room;
            $_SESSION['offer']['offermain']['price']= $guest['price'];
            $_SESSION['offer']['offermain']['img']= $guest['img'];

            $roomtype2= $_SESSION['guest']['roomtype'];
            $_SESSION['offer']['offersub']['roomtype']= $roomtype;
            $sl_room2 = $this->SL_Room($people,($guest['guest']/2) );
            $_SESSION['offer']['offersub']['roomcount']= $sl_room2;
            $_SESSION['offer']['offersub']['price']= $guest['price'];
            $_SESSION['offer']['offersub']['img']= $guest['img'];

        }
        else{

            // $peopleremain = ((int)$people - (int)($guest['guest'] * $guest['roomremain']));
            // echo $_SESSION['guest']['roomtype'];
            // echo  $sl_room1 = $guest['roomremain'];
            // echo "thieu phong cho:" . $peopleremain;
            unset($_SESSION['offer']['offermain']);
            unset($_SESSION['offer']['offersub']);
             $guestdouble= $this->maxguest('Double Room');
            //  print_r($guestdouble);
             if( $people <= ($guestdouble['roomremain'] * $guestdouble['guest']) ){
                // Double room
                $slRoomDouble = $this->SL_Room2($people, $guestdouble['guest']);
                $_SESSION['offer']['offer3']['roomtype1'] = 'Double Room';
                $_SESSION['offer']['offer3']['roomcount1']= $slRoomDouble;
                $_SESSION['offer']['offer3']['price1']= $data['room']['1']['rRoomPrice'];
                $_SESSION['offer']['offer3']['img1']= $data['room']['1']['rImg'];
                // Single room
                $guestsingle = $people - $slRoomDouble * $guestdouble['guest'];
                $slroomSingle = $this->SL_Room($guestsingle,$guest['guest'] );
                $_SESSION['offer']['offer3']['roomtype2'] = 'Single Room';
                $_SESSION['offer']['offer3']['roomcount2']= $slroomSingle;
                $_SESSION['offer']['offer3']['price2']= $guest['price'];
                $_SESSION['offer']['offer3']['price2']= $data['room']['0']['rRoomPrice'];
                $_SESSION['offer']['offer3']['img2']= $data['room']['0']['rImg'];
             }
             else{
                $peopleremain = ((int)$people - (int)($guestdouble['guest'] * $guestdouble['roomremain']));
                $slRoomDouble = $guestdouble['roomremain'];
                $_SESSION['offer']['offer3']['roomtype1'] = 'Double Room';
                $_SESSION['offer']['offer3']['roomcount1']= $slRoomDouble;
                $_SESSION['offer']['offer3']['price1']= $data['room']['1']['rRoomPrice'];
                $_SESSION['offer']['offer3']['img1']= $data['room']['1']['rImg'];

                if($peopleremain  <= ($guest['guest'] * $guest['roomremain']  )  ){
                     $slroomSingle = $this->SL_Room($peopleremain,$guest['guest'] );
                    $_SESSION['offer']['offer3']['roomtype2'] = 'Single Room';
                     $_SESSION['offer']['offer3']['roomcount2']= $slroomSingle;
                     $_SESSION['offer']['offer3']['price2']= $data['room']['0']['rRoomPrice'];
                     $_SESSION['offer']['offer3']['img2']= $data['room']['0']['rImg'];
                }
                else{
                    // $_SESSION['offer']['offer3']=NULL;
                    unset($_SESSION['offer']['offer3']);
                }
             }
            

            
           

        }
       
    }

    
    function OfferBooking(){
        ob_start();
        if(empty($_SESSION['guest']['name'])){
            // header('Location:'.URL. 'Booking');
            echo "<script>window.location.href= '".URL. 'Booking'."'</script>";
        }

        $this->offer1();
        $this->offer2();
        $this->offer3();
        
        $stt= 1;
        foreach($_SESSION['offer'] as $row){
            
           $data['offer'][$stt]=$row;
           $stt++;
        }
       
       echo $countoffer = count($_SESSION['offer']);
        if($countoffer == 2){
            // require_once "./mvc/views/layout/offer-booking1.php";
            $this->view("layout/offer-booking1",$data);
            $stt= 1;
            foreach($data['offer'] as $row){
                if(isset($_POST['bookingoffer'.$stt])){
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                   
                    $_SESSION['finaloffer'] = $data['offer'][$stt];
                    
                    // header('Location:'.URL. 'Booking/confirm');
                    echo "<script>window.location.href= '".URL. 'Booking/confirm'."'</script>";
                    ob_end_flush(); // dùng để chạy câu lệnh phía trên 
                    // $this->view('layout/customer');
                    
                }
                
                $stt++;
            }
        }
        else if($countoffer == 3){
            $this->view("layout/offer-booking2",$data);
            $stt= 1;
            foreach($data['offer'] as $row){
                if(isset($_POST['bookingoffer'.$stt])){
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                   
                    $_SESSION['finaloffer'] = $data['offer'][$stt];
                    
                    // header('Location:'.URL. 'Booking/confirm');
                    echo "<script>window.location.href= '".URL. 'Booking/confirm'."'</script>";
                    ob_end_flush(); // dùng để chạy câu lệnh phía trên 
                    // $this->view('layout/customer');
                    
                }
                
                $stt++;
            }
        }
        else{
            $this->view('layout/out-of-room');
            // require 1 view thông báo hết phòng.
            // nội dung: Xin lỗi + đề nghị khách hàng chọn phòng lại
        }
       
        // print_r($data['offer']);

    }
    function auth(){
        // print_r($_SESSION['guest']);
        echo  $people= (int)$_SESSION['guest']['numberAdult'] + (int)$_SESSION['guest']['numberChildren'];
        echo "offermain";
        print_r ($_SESSION['offer']['offermain']);
        echo "offersub";
        print_r ($_SESSION['offer']['offersub']);
        echo "offer1";
        print_r ($_SESSION['offer']['offer1']);
        echo "offer2";
        print_r ($_SESSION['offer']['offer2']);
        echo "offer3";
        print_r ($_SESSION['offer']['offer3']); 
        echo "Số offer". count($_SESSION['offer']);
        // $this->view('layout/customer-mail');
        
    }
    function confirm(){
        ob_start();
        if(empty($_SESSION['guest'])){
            // header('Location:'.URL);
            echo "<script>window.location.href= '".URL."'</script>";
        }
        if(empty($_SESSION['finaloffer'])){
            if(empty($_SESSION['guest']['name'])){
                // header('Location:'.URL. 'Booking');
                echo "<script>window.location.href= '".URL.'Booking'."'</script>";
            }
            // header('Location:'.URL. 'Booking/OfferBooking');
            echo "<script>window.location.href= '".URL.'Booking/OfferBooking'."'</script>";
            
        }
        
        
        
        // print_r ($_SESSION['guest']);
        $this->view('layout/customer');

        // Sự kiện 'finalBooking' để hoàn tất việc booking và gửi mail cho Khách hàng
        
        

    }
    public function final(){
        // if(isset($_POST['finalBooking'])){
            $countoffer = count($_SESSION['offer']);
            // print_r($_SESSION['finaloffer']);
            // echo "guest";
            // print_r ($_SESSION['guest']);
            $data = $_SESSION['guest'];
            $data['roomtype']= NULL;
            $model=$this->modellayout("bookingform");
            if($countoffer == 3){
               $data['roomtype']= $_SESSION['finaloffer']['roomtype1'];
               $data['roomcount']=  $_SESSION['finaloffer']['roomcount1'];
               $data['roomtype2']= $_SESSION['finaloffer']['roomtype2'];
               $data['roomcount2']=  $_SESSION['finaloffer']['roomcount2'];
            //    print_r($data);
               $model->insertbookingfull2($data['name'],$data['mail'],$data['phone'],$data['country'],$data['dateCheckIn'],$data['dateCheckOut'],$data['numberAdult'],$data['numberChildren'],$data['roomtype'],$data['Decription'],$data['roomcount'],$data['roomtype2'],$data['roomcount2']);
                
            }else{
                $data['roomtype']= $_SESSION['finaloffer']['roomtype'];
                $data['roomcount']=  $_SESSION['finaloffer']['roomcount'];
                // print_r($data);
                $model-> insertbookingfull1($data['name'],$data['mail'],$data['phone'],$data['country'],$data['dateCheckIn'],$data['dateCheckOut'],$data['numberAdult'],$data['numberChildren'],$data['roomtype'],$data['Decription'],$data['roomcount']);
               
            }
            ob_end_flush();
            // print_r($data);

            unset($_SESSION['guest']);
            if(empty($_SESSION['guest'])){
                // header('Location:'.URL."Home");
                echo "<script>window.location.href= '".URL.'Home'."'</script>";
            }   

        // }
        // echo "<script>window.location.href= '".URLAdmin.'login'."'</script>";
    }




}
?>