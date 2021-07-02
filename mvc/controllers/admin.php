<?php
use App\Request as RequestLib;
class Admin extends Controller{
    // function __construct() {
	// 	parent::__construct();
		  
	// }
    // Must have SayHi()
    public function __construct() {
     
        // Session::init();
        $this->adminModel = $this->modeladmin("login");
        $this->accountModel= $this->modeladmin("account");
        
    }
    function index(){
        // $this->viewadmin("index");
        $_SESSION['function']= "index";
        // echo "abc"; die();
        $model=$this->modeladmin("dashboard");
        $data['dashboard'] =  $model->general();

        $data['main'] = "home/main";
        // require_once "./mvc/views/admin/index.php";
        $this->viewadmin("index",$data);

        

        
    }
   
    public function login() {
        
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
        
        //Check for post
        if(isset($_POST['login'])) {
            
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            // print_r($data); die();
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $model=$this->modeladmin("login");
                $user =  $model->login($data['username'], $data['password']);
                
                if(isset($user['aUsername'])){
                    $this->createUserSession($user);
                }
                else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('admin/login', $data);
            
                }
               
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->viewadmin('login', $data);
    }
    public function loginReserve() {
        
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
        
        //Check for post
        if(isset($_POST['loginReserve'])) {
            // //Sanitize post data
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
            
            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $model=$this->modeladmin("login");
                $user =  $model->loginReserve($data['username'], $data['password']);
                
                // print_r($user); die();
                // echo mysqli_num_rows($data['user']);
                // print_r( $data['user']); die();
                // die();
                
                if(isset($user['raUsername'])){

                    $this->createReserveSession($user);
                }
                else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('admin/loginReserve', $data);
            
                }
               
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->viewadmin('loginReserve', $data);
    }

    public function createUserSession($user) {
        $_SESSION['admin']['type']= 'admin';
        $_SESSION['admin']['user_id'] =  $user['aAdminID'] ;
        $_SESSION['admin']['username'] = $user['aUsername'];
        $_SESSION['admin']['mail'] = $user['aEmail'];
        $_SESSION['admin']['img'] =imgAccount. $user['aimg'];
        // header('Location:'.URL);
        echo "<script>window.location.href= '".URLAdmin."'</script>";
    }
    public function createReserveSession($user) {
        $_SESSION['admin']['type']= 'reserve';
        $_SESSION['admin']['user_id'] =  $user['raReservationAgentID'] ;
        $_SESSION['admin']['username'] = $user['raUsername'];
        $_SESSION['admin']['mail'] = $user['raEmail'];
        $_SESSION['admin']['img'] =imgAccount. $user['raImg'];
        
        // header('Location:'.URLAdmin);
        echo "<script>window.location.href= '".URLAdmin."'</script>";
    }

    public function logout() {
        unset($_SESSION['admin']['user_id']);
        unset($_SESSION['admin']['username']);
        unset($_SESSION['admin']['mail']);
        unset($_SESSION['admin']['img']);

        // $data['main']="Booking/view-booking";
        // header('location:'.URLAdmin.'login');
        echo "<script>window.location.href= '".URLAdmin.'login'."'</script>";
        // $this->viewadmin("login");
        

    }
  // function logout()
	// {
	// 	Session::destroy();
	// 	header('location: index');
	// 	exit;
    // }

//admin booking

    public function ViewBooking(){
        $_SESSION['function'] = 'booking';
        $model=$this->modeladmin("booking");
        $data['booking'] =  $model->getAllBooking();

        $data['main']="Booking/view-booking";
        $this->viewadmin("index", $data);
    }
    
    public function Addbooking() {
        $_SESSION['function'] = 'booking';
        $data['booking'] = [
            'name' => '',
            'mail' =>'',
            'phone' => '',
            'country' => '',
            'bDateCheckIn' => '',
            'bDateCheckOut' => '',
            'numberAdults' =>'',
            'numberChildren' => '',
            'roomType' =>'',
            'Description' => '',
        ];
        
        //Check for post
        if(isset($_POST['addbooking'])) {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data['booking'] = [
                'name' => trim($_POST['name']),
                'mail' => trim($_POST['mail']),
                'phone' => trim($_POST['phone']),
                'country' => trim($_POST['country']),
                'bDateCheckIn' => trim($_POST['DateCheckIn']),
                'bDateCheckOut' => trim($_POST['DateCheckOut']),
                'numberAdults' => trim($_POST['NumberAdults']),
                'numberChildren' => trim($_POST['NumberChildren']),
                'roomType' => trim($_POST['booking-roomtype']),
                'Description' => trim($_POST['Descriptions']),
                'roomcount' => trim($_POST['roomcount'])
                
            ];
            // print_r($data['booking']); die();
            $model=$this->modeladmin("booking");
            $model->InsertBooking(
                $data['booking']['name' ],
                $data['booking']['mail' ],
                $data['booking']['phone' ],
                $data['booking']['country' ],
                $data['booking']['bDateCheckIn' ],
                $data['booking']['bDateCheckOut' ],
                $data['booking']['numberAdults' ],
                $data['booking']['numberChildren' ],
                $data['booking']['roomType' ],
                $data['booking']['Description'],
                $data['booking']['roomcount' ],
            );
          
        } 
        $data['main'] ="Booking/add-booking";
        $this->viewadmin('index',$data);
    }
    public function editbooking($id){
        $_SESSION['function'] = 'booking';
        $booking = [
            'BookingID'=> '',
            'GuestID' => '',
            'ReservationAgentID' => '',
            'DateCheckIn' => '',
            'DateCheckOut'=> '',
            'RoomCount' => '',
            
        ];
   
            $model= $this->modeladmin("booking");
            $data['booking'] = $model->getDataBookingById($id);
            // print_r($data); die();
             //Check for post
            if(isset($_POST['editBooking'])) {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $booking = [
                    'BookingID' => trim($_POST['BookingID']),
                    'GuestID' => trim($_POST['GuestID']),
                    'ReservationAgentID' => trim($_POST['ReservationAgentID']),
                    'DateCheckIn' => trim($_POST['DateCheckIn']),
                    'DateCheckOut' => trim($_POST['DateCheckOut']),
                    'RoomCount' => trim($_POST['RoomCount']),
                    
                ];
                // print_r ($booking);
                $model=$this->modeladmin("booking");
                $model->updateBooking($id,$booking['BookingID'],   $booking['GuestID' ], $booking['ReservationAgentID'], $booking['DateCheckIn' ],$booking['DateCheckOut'], $booking['RoomCount'] );

                
                $data['booking'] =  $model->getAllBooking();
                $data['main']="Booking/view-booking";
                // header('Location:'.URLAdmin. 'viewbooking');
                echo "<script>window.location.href= '".URLAdmin. 'viewbooking'."'</script>";
                $this->viewadmin("index",$data);
            }
        $data['main']="Booking/edit-booking";
        $this->viewadmin("index",$data);

    }
    public function deleteBooking($id){
        $_SESSION['function'] = 'booking';
        $model= $this->modeladmin("booking");
        $model->DeleteBookingById($id);
        // header('Location:'.URLAdmin. 'viewbooking');
        echo "<script>window.location.href= '".URLAdmin. 'viewbooking'."'</script>";
    }
    public function confirm($id){
        $_SESSION['function'] = 'booking';
        $model= $this->modeladmin("booking");
        $model->confirm($id);
        // header('Location:'.URLAdmin. 'viewbooking');
        echo "<script>window.location.href= '".URLAdmin. 'viewbooking'."'</script>";
    }
    public function checkin($id){
        $_SESSION['function'] = 'booking';
        $model= $this->modeladmin("booking");
        $model->checkin($id);
        // header('Location:'.URLAdmin. 'viewbooking');
        echo "<script>window.location.href= '".URLAdmin. 'viewbooking'."'</script>";
    }
    public function checkout($id){
        $_SESSION['function'] = 'booking';
        $model= $this->modeladmin("booking");
        $model->checkout($id);
        // header('Location:'.URLAdmin. 'viewbooking');
        echo "<script>window.location.href= '".URLAdmin. 'viewbooking'."'</script>";
    }


// admin room
    function ViewRoom() {
        // if ( RequestLib::get('test') ) {
        //     var_dump(RequestLib::get('test'));
        // }
        // rồi đó, giờ ông làm tiếp đi nha :3 tks oong! ok
        // exit;
        $_SESSION['function'] = 'room';
        
        if(isset($_GET['value'])) {
            // echo "Welcome ". $_GET['value']. "<br />"; 
            $data['value'] = trim($_GET['value']);
            $model=$this->modeladmin("room");
            
            // print_r($a); die();
            // echo $data['value']; die();
            if ($data['value'] !== "") {
                $data['value'] = strtolower($data['value']);
                $len=strlen($data['value']);
                $a =  $model->searchRoombyNumb($data['value']);
                //   print_r($a); die();
                  $stt=0;
                foreach($a as $name) {
                    // if ($hint === "") {
                    //     $hint = $name['0'];
                    // } else {
                    //     $hint .= ", ". $name['0'];
                    // }
                    $model= $this->modeladmin("room");

                    $data['room'][$stt]= $model->getDataRoomById($name['0']);
                    $stt++;
                }
                // print_r($data); die();
                $data['main']="Room/view-room";
                $this->viewadmin('index',$data);
                // die();
                // print_r($data['room']); die();
            }else{
                $model=$this->modeladmin("room");
                $data['room'] =  $model->getAllRoom();

            }
    
            // Output "no suggestion" if no hint was found or output correct values
            // echo $hint === "" ? "no suggestion" : $hint;
        }
        $model=$this->modeladmin("room");
        $data['room'] =  $model->getAllRoom();
        $data['main']="Room/view-room";
        $this->viewadmin('index',$data);
        
       
        
    }

    public function AddRoom() {
        $_SESSION['function'] = 'room';
           $data = [
            'RoomTypeID' => '',
            'RoomPrice' => '',
            'Description' => '',
            'RoomstatusID' => '',
            'RoomTypeIDError' => '',
            'RoomPriceError' => '',
            'DescriptionError' => '',
            'RoomstatusIDError' => '',
           
        ];
    
        
        //Check for post
        if(isset($_POST['addroom'])) {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data['room'] = [
                'Roomnumber' => trim($_POST['Roomnumber']),
                'RoomType' => trim($_POST['RoomType']),
                'Description' => trim($_POST['Description']),
                'RoomnumberError' => '',
                'RoomTypeError' => ''

            ];
            
            //Validate username
            if (empty($data['room']['Roomnumber'])) {
                $data['room']['RoomnumberError'] = 'Please enter Roomnumber.';
            }

            //Validate password
            if (empty($data['room']['RoomType'])) {
                $data['RoomTypeError'] = 'Please enter RoomTypeError.';
            }

            //Check if all errors are empty
            if (empty($data['room']['RoomTypeError']) && empty($data['room']['RoomnumberError'])) {
                $model=$this->modeladmin("room");
                $model->InsertRoom($data['room']['Roomnumber'],
                        $data['room']['RoomType'],
                        $data['room']['Description' ] );
                
            }
            echo "<script>window.location.href= '".URLAdmin. 'viewroom'."'</script>";

        } 
        $data['main']= "Room/add-room";
        $this->viewadmin("index",$data);
    }

    public function editroom($id){
        $_SESSION['function'] = 'room';
        $room = [
            'RoomID'=> '',
            'RoomTypeID' => '',
            'RoomPrice' => '',
            'Description' => '',
            'RoomstatusID' => '',
            'RoomIDError'=> '',
            'RoomTypeIDError' => '',
            'RoomPriceError' => '',
            'DescriptionError' => '',
            'RoomstatusIDError' => '',
        
        ];
   
            $model= $this->modeladmin("room");
            $data['room'] = $model->getDataRoomById($id);
            // print_r($data); die();
             //Check for post
            if(isset($_POST['editRoom'])) {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $room = [
                    'RoomID' => trim($_POST['RoomID']),
                    'RoomNumber' => trim($_POST['RoomNumber']),
                    'RoomTypeID' => trim($_POST['RoomTypeID']),
                    'RoomstatusID' => trim($_POST['RoomstatusID']),
                    'Description' => trim($_POST['Description']),
                    

                ];
                // print_r ($room); die();
                $model=$this->modeladmin("room");
                $model->updateRoom($id,$room['RoomID'], $room['RoomNumber'], $room['RoomTypeID'],$room['Description' ], $room['RoomstatusID'] );
                
                $data['room'] =  $model->getAllRoom();
                $data['main']="Room/view-room";
                // header('Location:'.URLAdmin. 'viewroom');
                echo "<script>window.location.href= '".URLAdmin. 'viewroom'."'</script>";
                $this->viewadmin("index",$data);
            }
        $data['main']="Room/edit-room";
        $this->viewadmin("index",$data);

    }

    public function deleteRoom($id){
        $_SESSION['function'] = 'room';
        $model= $this->modeladmin("room");
        $model->DeleteRoomById($id);
        // header('Location:'.URLAdmin. 'viewroom');
        echo "<script>window.location.href= '".URLAdmin. 'viewroom'."'</script>";
    }


    //view account admin
    
    public function viewaccount(){
        $_SESSION['function'] = 'account';

        if(isset($_GET['value'])) {
            // echo "Welcome ". $_GET['value']. "<br />"; 
            $data['value'] = trim($_GET['value']);
            // echo $data['value']; die();
            $model=$this->modeladmin("account");
            // $data['value'] = strtolower($data['value']);
            $a =  $model->searchAccountbyUsername($data['value']);
            // print_r($a); die();
            // echo $data['value']; die();
            if (($data['value'] !== "")) {
               if(isset($a)){
                    $stt=0;
                    foreach($a as $name) {
                        $model= $this->modeladmin("account");

                        $data['account'][$stt]= $model->getDataAccountById($name['0']);
                        $stt++;
                    }
                    $data['main'] = 'Account/view-account';
                    $this->viewadmin('index',$data);
                    
               }
               else{
                    $model=$this->modeladmin("account");
                    $data['account'] =  NULL;
                    $data['main'] = 'Account/view-account';
                    $this->viewadmin('index',$data);
               }
                // $len=strlen($data['value']);
               
                // print_r($a); die();
                
            }else{
                $model=$this->modeladmin("account");
                $data['account'] =  $model-> getAllAccount();
                $data['main'] = 'Account/view-account';
                $this->viewadmin('index',$data);
            }
        }

        $model=$this->modeladmin("account");
        $data['account'] =  $model-> getAllAccount();
        $data['main'] = 'Account/view-account';
        $this->viewadmin('index',$data);
    }
    
    public function AddAccount() {
        $_SESSION['function'] = 'account';
        $data['account'] = [
            'img' =>'',
            'username' =>'',
            'password' => '',
            'email' => '', 
            'firstname' => '',
            'lastname' => '',
            'address' => '',
            'country' => '',
            'phone' => '',
            'gender' => '',
            'birthday' => '',
            'rolesID' => '',
            'usernameError' => '',
            'passwordError' => '',
            'emailError' => ' ',
            'firstnameError' => ' ',
            'lastnameError' => ' ',
            'addressError' => ' ',
            'countryError' => ' ',
            'phoneError' => ' ',
            'genderError' => ' ',
            'birthdayError' => ' ',
            'rolesIDError' => ' ',
        ];

            // Check extension
            // if( in_array($imageFileType,$extensions_arr) ){
               // Upload file
            //    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
          
            // }
       
        //Check for post
        if(isset($_POST['addaccount'])) {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $file = $_FILES['file']['name'];
            // echo $file; die();
            $target_dir = imgAdmin."account/";
            $path=$target_dir.$file;
            
            // $target_file = $target_dir . basename($_FILES["file"]["name"]);
          
            // Select file type
            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          
            // Valid file extensions
            // $extensions_arr = array("jpg","jpeg","png","gif");

            $data['account'] = [
                
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'img' =>$_FILES['file']['name'],
                'email' => trim($_POST['email']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'address' => trim($_POST['address']),
                'country' => trim($_POST['country']),
                'phone' => trim($_POST['phone']),
                'gender' => trim($_POST['gender']),
                'birthday' => trim($_POST['birthday']),
                'rolesID' => trim($_POST['rolesID']),
                'usernameError' => '',
                'passwordError' => '',
                'emailError' => ' ',
                'firstnameError' => ' ',
                'lastnameError' => ' ',
                'addressError' => ' ',
                'countryError' => ' ',
                'phoneError' => ' ',
                'genderError' => ' ',
                'birthdayError' => ' ',
                'rolesIDError' => ' '



            ];

            
            //Validate username
            if (empty($data['account']['username'])) {
                $data['usernameError'] = 'Please enter a username.';    
            }

            //Validate password
            if (empty($data['account']['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['account']['usernameError']) && empty($data['account']['passwordError'])) {
                // echo $_FILES['file']['tmp_name'];
                // echo $target_dir.$file;
                // die();
                if(isset($path)){

                    $target_dir = $target_dir."(1)";
                    $path=$target_dir.$file;
                    move_uploaded_file($_FILES['file']['tmp_name'], $path);
                    $data['account']['img']="(1)".$file;
                }
                
                $model=$this->modeladmin("account");
                $model->InsertAccount($data['account']['username'],
                    $data['account']['password'],
                    $data['account']['img'],
                    $data['account']['email' ],
                    $data['account']['firstname' ],
                    $data['account']['lastname' ],
                    $data['account']['address' ],
                    $data['account']['country' ],
                    $data['account']['phone' ],
                    $data['account'][ 'gender' ],
                    $data['account']['birthday' ],
                    $data['account']['rolesID' ]
                    );
               
            }

        } 
        $data['main'] ="Account/add-account";
        $this->viewadmin('index',$data);
    }
    public function editAccount($id){
        $_SESSION['function'] = 'account';
        $account = [
            'aAdminID'=> '',
            'aUsername' => '',
            'aPassword' => '',
            'aimg' => '',
            'aEmail' => '',
            'aFirstName' => '',
            'aLastName'=> '',
            'aAddress' => '',
            'aCountry' => '',
            'aPhone' => '',
            'aGender' => '',
            'aBirthday' => '',
        
        ];
   
            $model= $this->modeladmin("account");
            $data['account'] = $model->getDataAccountById($id);
            // print_r($data); die();
             //Check for post
            if(isset($_POST['editAccount'])) {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $file = $_FILES['aimg']['name']; 
                $target_dir = imgAdmin."account/";
                $path=$target_dir.$file; 

                $account = [
                    'aAdminID'=> trim($_POST['aAdminID']),
                    'aUsername' => trim($_POST['aUsername']),
                    'aPassword' =>  trim($_POST['aPassword']),
                    'aimg' =>$_FILES['aimg']['name'],
                    'aEmail' =>  trim($_POST['aEmail']),
                    'aFirstName' =>  trim($_POST['aFirstName']),
                    'aLastName'=>  trim($_POST['aLastName']),
                    'aAddress' =>  trim($_POST['aAddress']),
                    'aCountry' =>  trim($_POST['aCountry']),
                    'aPhone' =>  trim($_POST['aPhone']),
                    'aGender' =>  trim($_POST['aGender']),
                    'aBirthday' =>  trim($_POST['aBirthday']),
                    

                ];
                // echo $path; die();
                if(isset($path)){

                    $target_dir = $target_dir."(1)";
                    $path=$target_dir.$file;
                    
                    
                    move_uploaded_file($_FILES['aimg']['tmp_name'], $path);
                    $account['img']="(1)".$file;
                }else{
                    move_uploaded_file($_FILES['aimg']['tmp_name'], $path);
                    $account['img']= $file;
                }

                // print_r ($room);
                $model=$this->modeladmin("account");
                $model->updateAccount($id,$account['aAdminID'], $account['aUsername' ], $account['aPassword'],$account['img'], $account['aEmail'],$account['aFirstName' ],$account['aLastName' ],$account['aAddress' ],$account['aCountry' ],$account['aPhone' ],$account['aGender' ],$account['aBirthday' ] );
                
                $data['account'] =  $model->getAllAccount();
                $data['main']="Account/view-account";
                // header('Location:'.URLAdmin. 'viewaccount');
                echo "<script>window.location.href= '".URLAdmin. 'viewaccount'."'</script>";
                $this->viewadmin("index",$data);
            }
        $data['main']="Account/edit-account";
        $this->viewadmin("index",$data);

    }
    public function deleteAccount($id){
        $_SESSION['function'] = 'account';
        $model= $this->modeladmin("account");
        $model->DeleteAccountById($id);
        // header('Location:'.URLAdmin. 'viewaccount');
        echo "<script>window.location.href= '".URLAdmin. 'viewaccount'."'</script>";
    }

    public function addblog(){
        $_SESSION['function'] = 'blog';
        $data['main'] ="Blogs/add-blog";
        $this->viewadmin('index',$data);
    }

    public function viewblog(){
        $_SESSION['function'] = 'blog';
        $data['main'] ="Blogs/view-blog";
        $this->viewadmin('index',$data);
    }

    public function editblog(){
        $_SESSION['function'] = 'blog';
        $data['main'] ="Blogs/edit-blog";
        $this->viewadmin('index',$data);
    }
    

    public function Reservation(){
        
        $_SESSION['function']='reservation';
       
        $model=$this->modeladmin("reservation");
        $data['reservation'] =  $model->getAllReservation();
        
        $data['main'] ="Reservation/Reservation";
        $this->viewadmin('index',$data);
    }
    public function viewreservation(){
        $_SESSION['function'] = 'reservation';
        $model=$this->modeladmin("reservation");
        $data['reservation'] =  $model->getAllReservation();
        
        $data['main']="Room/view-room";
        $this->viewadmin('index',$data);
    }
    public function deleteReservSinglePage($id)
    {
        unset($_SESSION['function'][$id]);
        echo "Xóa thành công";
    }


    // Chức năng Search
    public function search(){
        
        
        require_once "./test.php";
        // lookup all hints from array if $q is different from ""
       
       
    }
   
}
?>