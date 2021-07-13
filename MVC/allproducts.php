<?php include 'admin_header.php';
	require_once 'controllers/ProductController.php';
	$products = getProducts();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach($products as $p){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td><img width='80px' height='100px' src='".$p["img"]."'></td>";
						echo "<td>".$p["name"]."</p>";
						echo "<td>".$p["c_name"]."</p>";
						echo "<td>".$p["price"]."</p>";
						echo "<td>".$p["qty"]."</p>";
						echo '<td><a href="editproduct.php?id='.$p["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
						
				}
			?>
			
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>