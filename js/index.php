<html>
	<head></head>
	<body>
		<h1>This is HTML</h1>
		<br>
		<button onclick="viewJS()">Click me to run JS!</button>
		<span  id="sp1"></span>
		
	</body>
	<script>
		//alert("Hello from JS");
		function viewJS(){
			var sp1 = document.getElementById("sp1");
			sp1.innerHTML = "Hello from JS";
			sp1.style.color="#FF0000";
			sp1.style.margin="50px";
			sp1.style.backgroundColor="black";
			sp1.style.borderRadius="3px";
		}
	</script>
</html>