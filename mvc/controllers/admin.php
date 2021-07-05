<?php

use App\Request as RequestLib;

class Admin extends Controller
{
    // function __construct() {
    // 	parent::__construct();

    // }
    // Must have SayHi()
    public function __construct()
    {

        // Session::init();
        $this->adminModel = $this->modeladmin("login");
        $this->accountModel = $this->modeladmin("account");
    }
    function index()
    {
        // $this->viewadmin("index");
        $_SESSION['function'] = "index";
        // echo "abc"; die();

        // $model = $this->modeladmin("dashboard");
        // $data['dashboard'] =  $model->general();

        $data['main'] = "home/main";
        // require_once "./mvc/views/admin/index.php";
        $this->viewadmin("index", $data);
    }

    public function login()
    {

        $data = [
            'title' => 'Login page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if (isset($_POST['login'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];
            // print_r($data); die();
            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter a email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $model = $this->modeladmin("login");
                $user =  $model->login($data['email'], $data['password']);

                if (isset($user['email'])) {
                    $this->createUserSession($user);
                } else {
                    $data['passwordError'] = 'Password or email is incorrect. Please try again.';

                    $this->view('admin/login', $data);
                }
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
        }
        $this->viewadmin('login', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['admin']['type'] = 'admin';
        $_SESSION['admin']['adminid'] =  $user['adminid'];
        $_SESSION['admin']['email'] = $user['email'];
        $_SESSION['admin']['firstname'] = $user['firstname'];
        $_SESSION['admin']['lastname'] = $user['lastname'];
        $_SESSION['admin']['img'] = imgAccount . $user['avatar'];
        // header('Location:'.URL);
        echo "<script>window.location.href= '" . URLAdmin . "'</script>";
    }
    public function createReserveSession($user)
    {
        $_SESSION['admin']['type'] = 'reserve';
        $_SESSION['admin']['user_id'] =  $user['raReservationAgentID'];
        $_SESSION['admin']['username'] = $user['raUsername'];
        $_SESSION['admin']['mail'] = $user['raEmail'];
        $_SESSION['admin']['img'] = imgAccount . $user['raImg'];

        // header('Location:'.URLAdmin);
        echo "<script>window.location.href= '" . URLAdmin . "'</script>";
    }

    public function logout()
    {
        unset($_SESSION['admin']['adminid']);
        unset($_SESSION['admin']['email']);
        unset($_SESSION['admin']['firstname']);
        unset($_SESSION['admin']['lastname']);
        unset($_SESSION['admin']['img']);

        // $data['main']="Booking/view-booking";
        // header('location:'.URLAdmin.'login');
        echo "<script>window.location.href= '" . URLAdmin . 'login' . "'</script>";
        // $this->viewadmin("login");


    }
    // function logout()
    // {
    // 	Session::destroy();
    // 	header('location: index');
    // 	exit;
    // }

    //view account admin

    public function account()
    {
        $_SESSION['function'] = 'account';
        // echo "Welcome ". $_GET['value']. "<br />"; 

        //Hàm dùng để search data by name
        if (isset($_GET['value'])) {
            // echo "Welcome ". $_GET['value']. "<br />"; 
            $data['value'] = trim($_GET['value']);
            // echo $data['value']; die();
            $model = $this->modeladmin("account");
            // $data['value'] = strtolower($data['value']);
            $a =  $model->searchAccountbyUsername($data['value']);
            // print_r($a); die();
            // echo $data['value']; die();
            if (($data['value'] !== "")) {
                if (isset($a)) {
                    $stt = 0;
                    foreach ($a as $name) {
                        // print_r($name['0']);
                        $model = $this->modeladmin("account");
                        $data['account'][$stt] = $model->getDataAccountById($name['0']);
                        $stt++;
                    }
                    // die();
                    $data['main'] = 'Account/view-account';
                    $this->viewadmin('index', $data);
                } else {
                    $model = $this->modeladmin("account");
                    $data['account'] =  NULL;
                    $data['main'] = 'Account/view-account';
                    $this->viewadmin('index', $data);
                }
                // $len=strlen($data['value']);

                // print_r($a); die();

            } else {
                $model = $this->modeladmin("account");
                $data['account'] =  $model->getAllAccount();
                $data['main'] = 'Account/view-account';
                $this->viewadmin('index', $data);
            }
        }

        $model = $this->modeladmin("account");
        $data['account'] =  $model->getAllAccount();
        $data['main'] = 'Account/view-account';
        $this->viewadmin('index', $data);
    }
    public function AddAccount()
    {
        $_SESSION['function'] = 'account';
        $data['account'] = [
            'email' => '',
            'password' => '',
            'firstname' => '',
            'lastname' => '',
            'phone' => '',
            'avatar' => '',
        ];
        //Check for post
        if (isset($_POST['addaccount'])) {
            if (isset($_FILES['avatar'])) {
                // echo "<pre>";
                // print_r($_FILES['avatar']);
                // echo "</pre>";

                $img_name = $_FILES['avatar']['name'];
                $img_type = $_FILES['avatar']['type'];
                $tmp_name = $_FILES['avatar']['tmp_name'];
                $img_size = $_FILES['avatar']['size'];
                $error = $_FILES['avatar']['error'];

                if ($error === 0) {
                    if ($img_size > 12500000) {
                        $em = "Sorry, your file is too large.";
                        header("location: http://localhost:8080/NoiThat/admin/AddAccount?error=$em");
                    } else {
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);

                        $allowed_exs = array("jpg", "jpeg", "png");
                        if (in_array($img_ex_lc, $allowed_exs)) {
                            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                            // $new_img_name = trim($_POST['email']).'.'.$img_ex_lc;
                            // echo  $new_img_name;
                            $img_upload_path = 'C:\xampp\htdocs\NoiThat\mvc\Assets\admin\img\account/' . $new_img_name;
                            // echo  $img_upload_path;
                            move_uploaded_file($tmp_name, $img_upload_path);
                        } else {
                            $em = "You can't upload files of this type";
                            header("location: http://localhost:8080/NoiThat/admin/AddAccount?error=$em");
                        }
                    }
                } else {
                    $new_img_name = "img_avatar.png";
                }
            }
            // echo "abc";
            // echo $new_img_name;
            // die();

            $data['account'] = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'phone' => trim($_POST['phone']),
                'avatar' => $new_img_name,
            ];
            // echo $data['account']['avatar'];
            // die();
            $model = $this->modeladmin("account");
            $model->InsertAccount(
                $data['account']['email'],
                $data['account']['password'],
                $data['account']['phone'],
                $data['account']['firstname'],
                $data['account']['lastname'],
                $data['account']['avatar']
            );
            echo "<script>window.location.href= '" . URLAdmin . 'account' . "'</script>";
        }
    }

    public function editAccount()
    {
        $_SESSION['function'] = 'account';
        $account = [
            'update_id' => '',
            'email' => '',
            'phone' => '',
            'firstname' => '',
            'lastname' => '',
            'avatar' => '',

        ];

        // $model = $this->modeladmin("account");
        // $data['account'] = $model->getDataAccountById($id);
        // print_r($data); die();
        //Check for post
        if (isset($_POST['updateaccount'])) {

            $account = [
                'update_id' => trim($_POST['update_id']),
                'email' => trim($_POST['email']),
                'phone' =>  trim($_POST['phone']),
                'firstname' =>  trim($_POST['firstname']),
                'lastname' =>  trim($_POST['lastname']),
            ];
            // $id= $account['update_id'];
            // print_r ($room);
            $model = $this->modeladmin("account");
            $model->updateAccount(
                $account['update_id'],
                $account['email'],
                $account['phone'],
                $account['firstname'],
                $account['lastname']
            );
            echo "<script>window.location.href= '" . URLAdmin . 'account' . "'</script>";
        }
    }

    public function deleteAccount($id)
    {
        $_SESSION['function'] = 'account';
        $model = $this->modeladmin("account");
        $model->DeleteAccountById($id);
        // header('Location:'.URLAdmin. 'viewaccount');
        echo "<script>window.location.href= '" . URLAdmin . 'account' . "'</script>";
    }


    //view account user

    public function user()
    {
        $_SESSION['function'] = 'user';

        //Hàm dùng để search data by name
        if (isset($_GET['value'])) {
            $data['value'] = trim($_GET['value']);
            $model = $this->modeladmin("user");
            $a =  $model->searchUsertbyFirstname($data['value']);
            // print_r($a); die();
            // echo $data['value']; die();
            if (($data['value'] !== "")) {
                if (isset($a)) {
                    $stt = 0;
                    foreach ($a as $name) {
                        print_r($name['0']);
                        $model = $this->modeladmin("user");
                        $data['account'][$stt] = $model->getDataUserById($name['0']);
                        $stt++;
                    }
                    // die();
                    $data['main'] = 'User/view-user';
                    $this->viewadmin('index', $data);
                } else {
                    $model = $this->modeladmin("user");
                    $data['account'] =  NULL;
                    $data['main'] = 'User/view-user';
                    $this->viewadmin('index', $data);
                }
                // $len=strlen($data['value']);

                // print_r($a); die();

            } else {
                $model = $this->modeladmin("user");
                $data['account'] =  $model->getAllUser();
                $data['main'] = 'User/view-user';
                $this->viewadmin('index', $data);
            }
        }

        $model = $this->modeladmin("user");
        $data['account'] =  $model->getAllUser();
        $data['main'] = 'User/view-user';
        $this->viewadmin('index', $data);
    }
    public function AddUser()
    {
        $_SESSION['function'] = 'user';
        $data['user'] = [

            'email' => '',
            'password' => '',
            'firstname' => '',
            'lastname' => '',
            'phone' => '',
            'address' => '',
            'avatar' => ''
        ];
        //Check for post
        if (isset($_POST['adduser'])) {
            if (isset($_FILES['avatar'])) {

                $img_name = $_FILES['avatar']['name'];
                $img_type = $_FILES['avatar']['type'];
                $tmp_name = $_FILES['avatar']['tmp_name'];
                $img_size = $_FILES['avatar']['size'];
                $error = $_FILES['avatar']['error'];

                if ($error === 0) {
                    if ($img_size > 12500000) {
                        $em = "Sorry, your file is too large.";
                        header("location: http://localhost:8080/NoiThat/admin/AddUser?error=$em");
                    } else {
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);

                        $allowed_exs = array("jpg", "jpeg", "png");
                        if (in_array($img_ex_lc, $allowed_exs)) {
                            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                            $img_upload_path = 'C:\xampp\htdocs\NoiThat\mvc\Assets\img\users/' . $new_img_name;
                            // echo  $img_upload_path;
                            move_uploaded_file($tmp_name, $img_upload_path);
                        } else {
                            $em = "You can't upload files of this type";
                            header("location: http://localhost:8080/NoiThat/admin/AddAccount?error=$em");
                        }
                    }
                } else {
                    $new_img_name = "img_avatar.png";
                }
            }
            $data['user'] = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'avatar' => $new_img_name,
            ];
            // echo $data['user'];
            // exit;
            $model = $this->modeladmin("user");
            $model->InsertUser(
                $data['user']['email'],
                $data['user']['password'],
                $data['user']['phone'],
                $data['user']['firstname'],
                $data['user']['lastname'],
                $data['user']['address'],
                $data['user']['avatar']
            );
            echo "<script>window.location.href= '" . URLAdmin . 'user' . "'</script>";
        }
    }

    public function editUser()
    {
        $_SESSION['function'] = 'user';
        $user = [
            'update_id' => '',
            'email' => '',
            'phone' => '',
            'firstname' => '',
            'lastname' => '',
            'avatar' => '',
        ];

        // $model = $this->modeladmin("account");
        // $data['account'] = $model->getDataAccountById($id);
        // print_r($data); die();
        //Check for post
        if (isset($_POST['updateuser'])) {

            $user = [
                'update_id' => trim($_POST['update_id']),
                'email' => trim($_POST['email']),
                'phone' =>  trim($_POST['phone']),
                'firstname' =>  trim($_POST['firstname']),
                'lastname' =>  trim($_POST['lastname']),
                'address' =>  trim($_POST['address']),


            ];
            // $id= $user['update_id'];
            // print_r ($room);
            $model = $this->modeladmin("user");
            $model->updateUser2(
                $user['update_id'],
                $user['email'],
                $user['phone'],
                $user['firstname'],
                $user['lastname'],
                $user['address']
            );
            echo "<script>window.location.href= '" . URLAdmin . 'user' . "'</script>";
        }
    }

    public function deleteUser($id)
    {
        $_SESSION['function'] = 'user';
        $model = $this->modeladmin("user");
        $model->DeleteUserById($id);
        // header('Location:'.URLAdmin. 'viewaccount');
        echo "<script>window.location.href= '" . URLAdmin . 'user' . "'</script>";
    }

    //view product

    public function product()
    {
        $_SESSION['function'] = 'product';

        //Hàm dùng để search data by name
        if (isset($_GET['value'])) {
            $data['value'] = trim($_GET['value']);
            $model = $this->modeladmin("product");
            $a =  $model->searchProductbyName($data['value']);
            // print_r($a); die();
            // echo $data['value']; die();
            if (($data['value'] !== "")) {
                if (isset($a)) {
                    $stt = 0;
                    foreach ($a as $name) {
                        print_r($name['0']);
                        $model = $this->modeladmin("product");
                        $data['product'][$stt] = $model->getDataProductById($name['0']);
                        $stt++;
                    }
                    // die();
                    $data['main'] = 'Product/view-product';
                    $this->viewadmin('index', $data);
                } else {
                    $model = $this->modeladmin("product");
                    $data['product'] =  NULL;
                    $data['main'] = 'Product/view-product';
                    $this->viewadmin('index', $data);
                }
                // $len=strlen($data['value']);

                // print_r($a); die();

            } else {
                $model = $this->modeladmin("product");
                $data['product'] =  $model->getAllProduct();
                $data['main'] = 'Product/view-product';
                $this->viewadmin('index', $data);
            }
        }

        $model = $this->modeladmin("product");
        $data['product'] =  $model->getAllProduct();
        $data['main'] = 'Product/view-product';
        $this->viewadmin('index', $data);
    }
    public function AddProduct()
    {
        $_SESSION['function'] = 'user';
        $data['product'] = [
            'name' => '',
            'price' => '',
            'category' => '',
            'img' => '',
        ];
        //Check for post
        if (isset($_POST['addproduct'])) {
            if (isset($_FILES['img'])) {
                // echo "<pre>";
                // print_r($_FILES['avatar']);
                // echo "</pre>";

                $img_name = $_FILES['img']['name'];
                $img_type = $_FILES['img']['type'];
                $tmp_name = $_FILES['img']['tmp_name'];
                $img_size = $_FILES['img']['size'];
                $error = $_FILES['img']['error'];

                if ($error === 0) {
                    if ($img_size > 12500000) {
                        $em = "Sorry, your file is too large.";
                        header("location: http://localhost:8080/NoiThat/admin/AddAccount?error=$em");
                    } else {
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);

                        $allowed_exs = array("jpg", "jpeg", "png");
                        if (in_array($img_ex_lc, $allowed_exs)) {
                            $new_img_name = uniqid("IMG-", true);
                            // $new_img_name = trim($_POST['email']).'.'.$img_ex_lc;
                            // echo  $new_img_name;
                            $img_upload_path = 'C:\xampp\htdocs\NoiThat\mvc\Assets\img\All-products/' . $new_img_name.'.'.$img_ex_lc;
                            // echo  $img_upload_path;
                            move_uploaded_file($tmp_name, $img_upload_path);
                        } else {
                            $em = "You can't upload files of this type";
                            header("location: http://localhost:8080/NoiThat/admin/AddAccount?error=$em");
                        }
                    }
                } else {
                    $new_img_name = "img_avatar.png";
                }
            }
            $data['product'] = [
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'category' => trim($_POST['category']),
                'img' => $new_img_name
            ];
            $model = $this->modeladmin("product");
            $model->InsertProduct(
                $data['product']['name'],
                $data['product']['img'],
                $data['product']['price'],
                $data['product']['category']
            );
            echo "<script>window.location.href= '" . URLAdmin . 'product' . "'</script>";
        }
    }

    public function editProduct()
    {
        $_SESSION['function'] = 'product';
        $product = [
            'update_id' => '',
            'name' => '',
            'price' => '',
            'category' => '',
        ];

        // $model = $this->modeladmin("account");
        // $data['account'] = $model->getDataAccountById($id);
        // print_r($data); die();
        //Check for post
        if (isset($_POST['updateproduct'])) {

            $product = [
                'update_id' => trim($_POST['update_id']),
                'name' => trim($_POST['name']),
                'price' =>  trim($_POST['price']),
                'category' =>  trim($_POST['category']),
            ];
            // $id= $product['update_id'];
            // print_r ($room);
            $model = $this->modeladmin("product");
            $model->updateProduct(
                $product['update_id'],
                $product['name'],
                $product['price'],
                $product['category']
            );
            echo "<script>window.location.href= '" . URLAdmin . 'product' . "'</script>";
        }
    }

    public function deleteProduct($id)
    {
        $_SESSION['function'] = 'product';
        $model = $this->modeladmin("product");
        $model->DeleteProductById($id);
        // header('Location:'.URLAdmin. 'viewaccount');
        echo "<script>window.location.href= '" . URLAdmin . 'product' . "'</script>";
    }




    //admin booking

    public function ViewBooking()
    {
        $_SESSION['function'] = 'booking';
        $model = $this->modeladmin("booking");
        $data['booking'] =  $model->getAllBooking();

        $data['main'] = "Booking/view-booking";
        $this->viewadmin("index", $data);
    }

    public function Addbooking()
    {
        $_SESSION['function'] = 'booking';
        $data['booking'] = [
            'name' => '',
            'mail' => '',
            'phone' => '',
            'country' => '',
            'bDateCheckIn' => '',
            'bDateCheckOut' => '',
            'numberAdults' => '',
            'numberChildren' => '',
            'roomType' => '',
            'Description' => '',
        ];

        //Check for post
        if (isset($_POST['addbooking'])) {
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
            $model = $this->modeladmin("booking");
            $model->InsertBooking(
                $data['booking']['name'],
                $data['booking']['mail'],
                $data['booking']['phone'],
                $data['booking']['country'],
                $data['booking']['bDateCheckIn'],
                $data['booking']['bDateCheckOut'],
                $data['booking']['numberAdults'],
                $data['booking']['numberChildren'],
                $data['booking']['roomType'],
                $data['booking']['Description'],
                $data['booking']['roomcount']
            );
        }
        $data['main'] = "Booking/add-booking";
        $this->viewadmin('index', $data);
    }
    public function editbooking($id)
    {
        $_SESSION['function'] = 'booking';
        $booking = [
            'BookingID' => '',
            'GuestID' => '',
            'ReservationAgentID' => '',
            'DateCheckIn' => '',
            'DateCheckOut' => '',
            'RoomCount' => '',

        ];

        $model = $this->modeladmin("booking");
        $data['booking'] = $model->getDataBookingById($id);
        // print_r($data); die();
        //Check for post
        if (isset($_POST['editBooking'])) {
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
            $model = $this->modeladmin("booking");
            $model->updateBooking($id, $booking['BookingID'],   $booking['GuestID'], $booking['ReservationAgentID'], $booking['DateCheckIn'], $booking['DateCheckOut'], $booking['RoomCount']);


            $data['booking'] =  $model->getAllBooking();
            $data['main'] = "Booking/view-booking";
            // header('Location:'.URLAdmin. 'viewbooking');
            echo "<script>window.location.href= '" . URLAdmin . 'viewbooking' . "'</script>";
            $this->viewadmin("index", $data);
        }
        $data['main'] = "Booking/edit-booking";
        $this->viewadmin("index", $data);
    }
    public function deleteBooking($id)
    {
        $_SESSION['function'] = 'booking';
        $model = $this->modeladmin("booking");
        $model->DeleteBookingById($id);
        // header('Location:'.URLAdmin. 'viewbooking');
        echo "<script>window.location.href= '" . URLAdmin . 'viewbooking' . "'</script>";
    }
    public function confirm($id)
    {
        $_SESSION['function'] = 'booking';
        $model = $this->modeladmin("booking");
        $model->confirm($id);
        // header('Location:'.URLAdmin. 'viewbooking');
        echo "<script>window.location.href= '" . URLAdmin . 'viewbooking' . "'</script>";
    }
    public function checkin($id)
    {
        $_SESSION['function'] = 'booking';
        $model = $this->modeladmin("booking");
        $model->checkin($id);
        // header('Location:'.URLAdmin. 'viewbooking');
        echo "<script>window.location.href= '" . URLAdmin . 'viewbooking' . "'</script>";
    }
    public function checkout($id)
    {
        $_SESSION['function'] = 'booking';
        $model = $this->modeladmin("booking");
        $model->checkout($id);
        // header('Location:'.URLAdmin. 'viewbooking');
        echo "<script>window.location.href= '" . URLAdmin . 'viewbooking' . "'</script>";
    }


    // admin room
    function ViewRoom()
    {
        // if ( RequestLib::get('test') ) {
        //     var_dump(RequestLib::get('test'));
        // }
        // rồi đó, giờ ông làm tiếp đi nha :3 tks oong! ok
        // exit;
        $_SESSION['function'] = 'room';

        if (isset($_GET['value'])) {
            // echo "Welcome ". $_GET['value']. "<br />"; 
            $data['value'] = trim($_GET['value']);
            $model = $this->modeladmin("room");

            // print_r($a); die();
            // echo $data['value']; die();
            if ($data['value'] !== "") {
                $data['value'] = strtolower($data['value']);
                $len = strlen($data['value']);
                $a =  $model->searchRoombyNumb($data['value']);
                //   print_r($a); die();
                $stt = 0;
                foreach ($a as $name) {
                    // if ($hint === "") {
                    //     $hint = $name['0'];
                    // } else {
                    //     $hint .= ", ". $name['0'];
                    // }
                    $model = $this->modeladmin("room");

                    $data['room'][$stt] = $model->getDataRoomById($name['0']);
                    $stt++;
                }
                // print_r($data); die();
                $data['main'] = "Room/view-room";
                $this->viewadmin('index', $data);
                // die();
                // print_r($data['room']); die();
            } else {
                $model = $this->modeladmin("room");
                $data['room'] =  $model->getAllRoom();
            }

            // Output "no suggestion" if no hint was found or output correct values
            // echo $hint === "" ? "no suggestion" : $hint;
        }
        $model = $this->modeladmin("room");
        $data['room'] =  $model->getAllRoom();
        $data['main'] = "Room/view-room";
        $this->viewadmin('index', $data);
    }

    public function AddRoom()
    {
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
        if (isset($_POST['addroom'])) {
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
                $model = $this->modeladmin("room");
                $model->InsertRoom(
                    $data['room']['Roomnumber'],
                    $data['room']['RoomType'],
                    $data['room']['Description']
                );
            }
            echo "<script>window.location.href= '" . URLAdmin . 'viewroom' . "'</script>";
        }
        $data['main'] = "Room/add-room";
        $this->viewadmin("index", $data);
    }

    public function editroom($id)
    {
        $_SESSION['function'] = 'room';
        $room = [
            'RoomID' => '',
            'RoomTypeID' => '',
            'RoomPrice' => '',
            'Description' => '',
            'RoomstatusID' => '',
            'RoomIDError' => '',
            'RoomTypeIDError' => '',
            'RoomPriceError' => '',
            'DescriptionError' => '',
            'RoomstatusIDError' => '',

        ];

        $model = $this->modeladmin("room");
        $data['room'] = $model->getDataRoomById($id);
        // print_r($data); die();
        //Check for post
        if (isset($_POST['editRoom'])) {
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
            $model = $this->modeladmin("room");
            $model->updateRoom($id, $room['RoomID'], $room['RoomNumber'], $room['RoomTypeID'], $room['Description'], $room['RoomstatusID']);

            $data['room'] =  $model->getAllRoom();
            $data['main'] = "Room/view-room";
            // header('Location:'.URLAdmin. 'viewroom');
            echo "<script>window.location.href= '" . URLAdmin . 'viewroom' . "'</script>";
            $this->viewadmin("index", $data);
        }
        $data['main'] = "Room/edit-room";
        $this->viewadmin("index", $data);
    }

    public function deleteRoom($id)
    {
        $_SESSION['function'] = 'room';
        $model = $this->modeladmin("room");
        $model->DeleteRoomById($id);
        // header('Location:'.URLAdmin. 'viewroom');
        echo "<script>window.location.href= '" . URLAdmin . 'viewroom' . "'</script>";
    }



    public function addblog()
    {
        $_SESSION['function'] = 'blog';
        $data['main'] = "Blogs/add-blog";
        $this->viewadmin('index', $data);
    }

    public function viewblog()
    {
        $_SESSION['function'] = 'blog';
        $data['main'] = "Blogs/view-blog";
        $this->viewadmin('index', $data);
    }

    public function editblog()
    {
        $_SESSION['function'] = 'blog';
        $data['main'] = "Blogs/edit-blog";
        $this->viewadmin('index', $data);
    }


    public function Reservation()
    {

        $_SESSION['function'] = 'reservation';

        $model = $this->modeladmin("reservation");
        $data['reservation'] =  $model->getAllReservation();

        $data['main'] = "Reservation/Reservation";
        $this->viewadmin('index', $data);
    }
    public function viewreservation()
    {
        $_SESSION['function'] = 'reservation';
        $model = $this->modeladmin("reservation");
        $data['reservation'] =  $model->getAllReservation();

        $data['main'] = "Room/view-room";
        $this->viewadmin('index', $data);
    }
    public function deleteReservSinglePage($id)
    {
        unset($_SESSION['function'][$id]);
        echo "Xóa thành công";
    }


    // Chức năng Search
    public function search()
    {


        require_once "./test.php";
        // lookup all hints from array if $q is different from ""


    }
}
