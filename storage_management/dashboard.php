<?php
	//session_start();
	if(!isset($_COOKIE["loggeduser"])){
		header("Location: index.php");
	}
?>
<html>
	<body>
		<h1 align="center">Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
		<a href="add_product.php">Add product</a>
		<a >All product</a>
		<a >All user</a>
	</body>
</html>