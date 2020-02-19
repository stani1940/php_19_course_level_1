<?php  

$week_info = [ "monday"=>"Laugh on Monday, laugh for danger.",
  				"tuesday"=>"Laugh on Tuesday, kiss a stranger.", 
  				"wednesday"=>"Laugh on Wednesday, laugh for a letter.", 
  				"thursday"=>"Laugh on Thursday, something better.",
  		 		"friday" =>"Laugh on Friday, laugh for sorrow.",
  		 		"saturday" =>"Laugh on Saturday, joy tomorrow.",
  		 	];
	foreach ($week_info as $key => $value) {
	echo "<p>".$key." the strophe is ".$value."</p>";
	}
$problem = "2. Създайте масив от числа. Отпечатайте произведението на всички елементи в масива.";
echo "<p>".$problem."</p>";
$all = 1;	
//$arr = [1, 2, 3];
//$arr =[0, 1, 3, 7, 23];
//$arr = [];
$arr = ['name', 7, 8];
$flag = true;
//if empty array 
if( empty($arr) ){
	echo 'Not a valid input';
} else {
	foreach ($arr as $value) {
		if( is_numeric($value) ){
			$all *= $value;
			//$all = $all * $value;
		} else {
			$all = 'Not a valid input';
			// echo 'Not a valid input';
			// $flag = false;
			break;
		}
	}
	// if( $flag == true ){
	// 	echo $all;
	// }
	echo $all;
}
	
	$array = [25,2,10];
	$max = 0;

	if (empty($array)) {
	echo "Not a valid input";	
	}else{
		foreach ($array as $value) {
			if (is_numeric($value)) {
				if ($max <= $value) {
				$max = $value;
			}

		}else{
			echo "Not a valid input";
		}
		
	}
	echo "<p>".$max."</p>";
	
}
$n = 100;
$x = 1;
$flag = true;
while ($x<=$n) {
	$x++;
	if ($x % 3 ==0 && $x % 7==0) {
		echo $x." ";
		
		}else{
			
			$flag = false;

		}

}
		if ($flag == false) {
		echo "no such numbers";
	}
	
	
?>