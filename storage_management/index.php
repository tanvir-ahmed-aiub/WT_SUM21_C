<?php
	//session_start();
	$uname="";
	$pass="";
	$err_uname="";
	$err_pass="";
	$hasError=false;
	$users = array("tanvir"=>"1234","sabbir"=>"123","karim"=>"345","rahim"=>"543");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname = "Username required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "Password required";
		}
		else{
			$pass = $_POST["pass"];
		}
		if(!$hasError){
			
			foreach($users as $u=>$p){
				if($uname == $u && $pass ==$p){
					setcookie("loggeduser",$uname,time()+300,"/");
					//$_SESSION["loggeduser"] = $uname;
					header("Location: dashboard.php");
				}
				
			}
			echo "Invalid user";
		}
		
	}
	
	
?>

<html>
	<body>
		<form action="" method="post">
			Username: <input type="text" name="uname" value="<?php echo $uname?>"> <span><?php echo $err_uname;?></span><br>
			Password: <input type="password" name="pass" value="<?php echo $pass?>"> <span><?php echo $err_pass;?></span><br>
			<input type="submit" value="Login">
		</form>
	</body>
</html>