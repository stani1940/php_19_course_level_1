<?php 

function max_frequent_number($numbers,$number){
	if (in_array($number, $numbers)) {//проверява дали числото е в масива
		$count = 0;
		for ($i = 0; $i <count($numbers) ; $i++) { 
			if ($numbers[$i]==$number) {
			$count++;
			}
		}
		echo "<p>".$count."</p>";
	}else{
		echo "not in array";
	}
	
}
max_frequent_number([2, 11, 2, 3, 0, 2],2);
max_frequent_number([0, 4, 7, 0, 0, 0],0);
max_frequent_number([4, 15, 27, 33, 1],8);
