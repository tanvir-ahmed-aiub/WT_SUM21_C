<?php
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["submit"])){
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
		//we will otherwise DB CRUD or authenticate
		header("Location: index.php");
	}
	
?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" placeholder="Your name ...."> </td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" placeholder="Username">  </td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" name="gender"> Male <input name="gender" value="Female" type="radio"> Female </td>
				</tr>
				<tr>
					<td>Profession</td>
					<td>: <select name="profession">
						<option>Teaching</option>
						<option>Business</option>
						<option>Service</option>
						<option>Nothing</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hobbies</td>
					<td>: <input type="checkbox" name="hobbies[]" value="Movies"> Movies 
					<input type="checkbox" name="hobbies[]" value="Music"> Music
					<input type="checkbox" name="hobbies[]" value="Sports"> Sports
					</td>
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>