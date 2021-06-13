<?php
	$arr = array();//empty array
	$arr2 = []; //empty array
	$students = array("tanvir","sabbir","karim");

	$arr[0] = 1;
	$arr[1] = 2;

	$arr2[] = 3; //insert into last index 0
	$arr2[] = 5; //index 1
	$arr2[] = 6; //index 2
	
	$students[] = "JARIN";
	$students[] = "Fahmin";
	
	
	for($i=0; $i<count($arr);$i++){
		echo $arr[$i]." ";
	}
	
	foreach($arr2 as $e){
		echo "$e ";
	}
	
	
	$arr4 = array();//empty associative array
	$arr5 = []; //empty associative array
	$arr6 = array("tanvir"=>35,"sabbir"=>36,"karim"=>37);
	$arr7 = array("tanvir"=>"797As","sabbir"=>"dsgfr7","karim"=>"sddfg?");
	
	$arr4["tanvir"] = 35;
	$arr4["sabbir"] = 36;
	$arr4["karim"] = 37;
	
	echo "<br>Roll of tanvir is " .$arr4["sabbir"];
	
	
	
	
	
	
	
	
	
	
	
	
?>