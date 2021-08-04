<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$err_db="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(!$hasError){
			$rs = insertUser($name,$uname,$_POST["email"],$_POST["pass"]);
			if ($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
		}
	}
	else if (isset($_POST["btn_login"])){
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		if(!$hasError){
			if(authenticateUser($uname,$pass)){
				
				header("Location: dashboard.php");
			}
			$err_db = "Username password invalid";
		}
		
	}
	
	function insertUser($name,$uname,$email,$pass){
		$query = "insert into users values (NULL,'$name','$uname','$email','$pass')";
		return execute($query);
		
	}
	function authenticateUser($uname,$pass){
		$query = "select * from users where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}
	function checkUsername($uname){
		$query = "select name from users where username='$uname'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
	}
	
	
	
?>