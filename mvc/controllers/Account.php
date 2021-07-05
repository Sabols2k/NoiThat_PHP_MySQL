<?php

use App\Request as RequestLib;

class Account extends Controller
{

    public function index()
    {
        $model = $this->modeladmin("user");
        $data['account'] =  $model->getDataUserById($_SESSION['user']['userid']);

        $data['bill']= [];
        $model1 = $this->modeladmin("bill");

        $data['bill'] =  $model1->getBillByUserid($_SESSION['user']['userid']);

        // print_r ($data['account']);
        $this->view('account', $data);
        // require_once "./mvc/views/layout/gioi-thieu.php";
    }

    public function updateprofile()
    {
        $_SESSION['function'] = 'account';
        $model = $this->modeladmin("user");
        $data['account'] =  $model->getDataUserById($_SESSION['user']['userid']);

        $account = [
            'userid' => '',
            'email' => '',
            'phone' => '',
            'firstname' => '',
            'lastname' => '',
            'address' => '',
            'avatar' => '',
        ];

        // $model = $this->modeladmin("account");
        // $data['account'] = $model->getDataAccountById($id);
        // print_r($data); die();
        //Check for post
        if (isset($_POST['updateprofile'])) {



            if (isset($_FILES['avatar'])) {
                // echo "yes";
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
                        header("location: http://localhost:8080/NoiThat/account?error=$em");
                    } else {
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);
                        $allowed_exs = array("jpg", "jpeg", "png");

                        if (in_array($img_ex_lc, $allowed_exs)) {
                            $new_img_name = $data['account']['userid'] . '.' . $img_ex_lc;
                            // $new_img_name = trim($_POST['email']).'.'.$img_ex_lc;
                            // echo  $new_img_name; die();
                            $img_upload_path = 'C:\xampp\htdocs\NoiThat\mvc\Assets\img\users/' . $new_img_name;
                            // echo  $img_upload_path;
                            move_uploaded_file($tmp_name, $img_upload_path);
                        } else {
                            $em = "You can't upload files of this type";
                            header("location: http://localhost:8080/NoiThat/account?error=$em");
                        }
                    }
                } else {
                    $new_img_name = $data['account']['avatar'];
                }
            }

            $account = [
                'userid' => trim($_POST['userid']),
                'email' => trim($_POST['email']),
                'phone' =>  trim($_POST['phone']),
                'firstname' =>  trim($_POST['firstname']),
                'lastname' =>  trim($_POST['lastname']),
                'address' =>  trim($_POST['address']),
                'avatar' =>  trim($new_img_name),
            ];
            // echo  $new_img_name;
            // die();
            // $id= $account['update_id'];
            // print_r ($account); die();
            $model = $this->modeladmin("user");
            $model->updateUser(
                $account['userid'],
                $account['email'],
                $account['phone'],
                $account['firstname'],
                $account['lastname'],
                $account['address'],
                $account['avatar']
            );
            echo "<script>window.location.href= '" . URL . 'account' . "'</script>";
        }
    }
}
