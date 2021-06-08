<?php
	$x = 12;
	$y = 10;
	
	$z = $x + $y;
	$name = "Tanvir Tanvir";
	$name2 = 'Tanvir Ahmed';
	
	function global_test(){
		global $z,$y;
		
		$q = 12;
		$s = $q + $z;
		echo "<br> $s";
	}
	
	function print_hello(){
		echo "<br><b><i>Hello Php</i></b>";
	}
	function sum($a,$b){
		return $a+$b;
	}
	
	echo strlen($name);
	
	$pos = strpos($name,"i");
	echo "<br> $pos";
	$pos2 = strpos($name,"i",$pos+1);
	echo "<br> $pos2";
	//$name . $name2 . "This is another string";
	
	/*if(1){
		$n = 12;
		
	}*/
	$s1 = "10";
	$s2 = 10;
	
	if($s1 === $s2){
		echo "<br> same";
	}
	else{
		echo "<br> not same";
	}
	
	
	
	
?>

<html>
	<head></head>
	<body>
		<h1>This is a heading</h1>
		<h1><?php echo "This heading from php";?></h1>
		<?php
			echo "hello world";
			print_hello();
		?>
		<br>
		The result of x and y is = <?php echo $z;
		
		echo "<br>THis is printed form php";
		?>
		<br>
		This is local variable n = <?php echo $n;?>
		<?php
			echo "<br>The name is " . $name . "<br>";
			echo "The name is $name2 <br>";
			$q = 10 + sum(12,13);
			echo sum(14,15);
			
		?>
		<br>
		This is testing global <?php GLOBAL_TEST();?>
	</body>
</html>

