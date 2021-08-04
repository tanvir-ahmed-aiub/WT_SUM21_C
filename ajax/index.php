<script>
	function get(id){
		return document.getElementById(id);
	}

	function loadDoc(){
		//get("demo").innerHTML = "Hello";
		var xhr = new XMLHttpRequest();
		xhr.open("GET","my_profile.php",true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}
</script>
<button onclick="loadDoc()">Click me</button>
<div id="demo"></div>