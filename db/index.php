<?php
		include 'header.php';
		include 'db_config.php';
		$query = "select * from users";
		
		$result = get($query);
		echo "<pre>";
		print_r($result);
		echo "</pre>";
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Username</th>
				  </tr>";
		foreach ($result as $row){
			echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["username"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	
		include 'footer.php';
	
	
	
	
?>