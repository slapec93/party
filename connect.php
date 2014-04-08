<?php
	$conn; 
	$result;

	function login() 
	{
		global $conn;
		$conn = mysqli_connect("localhost", "root", "", "party");
		return mysqli_connect_errno($conn);
	}

	function check_user_data() 
	{
		global $conn;
		$username = $_GET['username'];
		$password = $_GET['password'];
		$result = mysqli_query($conn, "SELECT 	username, password 
									   FROM users 
									   WHERE username = '$username' AND password = '$password';");
		if (mysqli_num_rows($result) == 1)
			return  true;
		else
			return false;
	}
?>