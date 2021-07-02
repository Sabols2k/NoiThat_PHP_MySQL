<?php
class login extends DB{
    public function __construct()
	{
		parent::__construct();
	}
	public function login($username, $password) {
		// $sql="SELECT * FROM `admin` WHERE aUsername='$username' AND aPassword='$password'";
		$sql = "CALL `login`('$username','$password');";
		$kq= $this->execute($sql);
		return mysqli_fetch_array($kq);
		
	}
	
	public function loginReserve($username, $password) {
		$sql="SELECT * FROM `reservationsagents` WHERE 	raUsername='$username' AND 	raPassword='$password'";
		// $sql="CALL `loginReserve`('$username', '$password');";
		$kq= $this->execute($sql);
		return mysqli_fetch_array($kq);
		
	}

}
?>