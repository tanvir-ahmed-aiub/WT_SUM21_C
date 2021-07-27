<?php include 'validations.php';?>
<html>
	<head>
		<script>
			var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validateGen(){
				var gn = document.getElementsByName("gender");
				var checked = false;
				for(var i=0;i<gn.length;i++){
					if(gn[i].checked){
						checked = true;
						break;
					}
				}
				return checked;
			}
			function validateHobb(){
				var hobb = document.getElementsByName("hobbies[]");
				var checked = false;
				for(var i=0;i<hobb.length;i++){
					if(hobb[i].checked){
						checked = true;
						break;
					}
				}
				return checked;
			}
			function validateGender(){
				var gn = document.querySelector('input[name="gender"]:checked');
				if(gn ==null){
					return false;
				}
				return true;
			}
			function validateHobbies(){
				var hb = document.querySelector('input[name="hobbies[]"]:checked');
				if(hb ==null){
					return false;
				}
				return true;
			}
			function validate(){
				refresh();
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
				else if(get("name").value.length <=2){
					hasError = true;
					get("err_name").innerHTML = "*Name must be > 2 char";
				}
				if(get("uname").value==""){
					hasError=true;
					get("err_uname").innerHTML = "*Username Req";
				}
				if(get("bio").value==""){
					hasError=true;
					get("err_bio").innerHTML = "*Bio Req";
				}
				if(get("prof").selectedIndex == 0){
					hasError=true;
					get("err_prof").innerHTML = "*Profession Req";
				}
				if(!get("male").checked && !get("female").checked){
					hasError=true;
					get("err_gen").innerHTML = "*Gender Req";
					
				}
				if(!validateGen()){
					hasError=true;
					get("err_gen").innerHTML = "*Gender Req";
				}
				if(!validateHobb()){
					hasError=true;
					get("err_hobb").innerHTML = "*Hobbies Req";
				}
				/*if(!get("male").checked && !get("female").checked){
					hasError=true;
					get("err_gen").innerHTML = "*Gender Req";
					
				}
				if(!get("movies").checked && !get("music").checked && !get("sports").checked){
					hasError=true;
					get("err_hobb").innerHTML = "*Hobbies Req";
					
				}*/
				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_name").innerHTML ="";
				get("err_uname").innerHTML ="";
				get("err_bio").innerHTML ="";
				get("err_prof").innerHTML ="";
				get("err_gen").innerHTML ="";
				get("err_hobb").innerHTML = "";
			}
		</script>
	</head>
	<body>
		<form action="" onsubmit="return validate()" method="post">
		<fieldset>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input id="name" type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span id="err_name"> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input id="uname" type="text" name="username" placeholder="Username">  </td>
					<td><span id="err_uname"> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" id="male" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input id="female" name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span id="err_gen"> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>Profession</td>
					<td>: <select id="prof" name="profession">
						<option disabled selected>---Select---</option>
						<?php
							foreach($array as $p){
								if($p == $profession) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><span id="err_prof"> <?php echo $err_profession;?> </span></td>
				</tr>
				<tr>
					<td>Hobbies</td>
					<td>: <input type="checkbox" id="movies" name="hobbies[]" <?php if(hobbyExist("Movies")) echo "checked";?> value="Movies"> Movies 
					<input type="checkbox" id="music" name="hobbies[]" <?php if(hobbyExist("Music")) echo "checked";?> value="Music"> Music<br>
					<input type="checkbox" id="sports" name="hobbies[]" <?php if(hobbyExist("Sports")) echo "checked";?> value="Sports"> Sports
					</td>
					<td><span id="err_hobb"> <?php echo $err_hobbies;?> </span></td>
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea id="bio" name="bio" ><?php echo $bio; ?></textarea>
					<td><span id="err_bio"> <?php echo $err_bio;?> </span></td>
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