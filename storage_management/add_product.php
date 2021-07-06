<?php
	//session_start();
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: index.php");
	}
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
		<form action="" method="post">
			Id: <input type="text" name="uname" value=""> </span><br>
			Name: <input type="text" name="uname" value=""> </span><br>
			Price: <input type="text" name="uname" value=""> </span><br>
			Qty: <input type="text" name="uname" value=""> </span><br>
			
			<input type="submit" value="Add">
		</form>
	</body>
</html>