<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession="";
	$hobbies=[];
	$err_hobbies="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	$array= array("Teaching","Business","Service","Nothing");
	
	function hobbyExist($hobby){
		global $hobbies;
		foreach($hobbies as $h){
			if($h == $hobby) return true;
		}
		return false;
	}
	
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 2){
			$hasError = true;
			$err_name="Name must contain >2 character";
		}
		else{
			$name = $_POST["name"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$hasError = true;
			$err_hobbies="Hobbies Required";
		}
		else{
			$hobbies = $_POST["hobbies"];
		}
		if (!isset($_POST["profession"])){
			$hasError = true;
			$err_profession="Profession Required";
		}
		else{
			$profession = $_POST["profession"];
		}
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["profession"]."<br>";
			echo $_POST["bio"]."<br>";
			$arr = $_POST["hobbies"];

			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
		//we will otherwise DB CRUD or authenticate
		///header("Location: index.php");
	}
	
?>