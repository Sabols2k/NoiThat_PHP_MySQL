<?php
class loginuser extends DB{
    public function __construct()
	{
		parent::__construct();
	}
	public function login($email, $password) {
		$sql="SELECT * FROM `user` WHERE email='$email' AND password='$password'";
		// $sql = "CALL `login`('$username','$password');";
		$kq= $this->execute($sql);
		return mysqli_fetch_array($kq);
		
	}
}
?>