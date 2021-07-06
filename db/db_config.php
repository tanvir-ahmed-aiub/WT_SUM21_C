<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="wt_sum21_c";
	
	$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
	if($conn){
		echo "Connected<br>";
		$query = "insert into users values (NULL,'rahim','rahim34','ertet','sdsd')";
		if(!mysqli_query($conn,$query)){
			echo mysqli_error($conn);
			//echo mysqli_errno($conn);
		}
		else{
			echo "inserted";
		}
	}
		
?>