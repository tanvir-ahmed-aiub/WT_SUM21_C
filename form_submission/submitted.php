<?php
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
?>