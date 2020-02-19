<?php  
function compare_number($arr){
	$number = min($arr);
    for ($i = 1; $i < count($arr)-1; $i++){
       if ($arr[$i] > $arr[$i - 1] && $arr[$i] > $arr[$i + 1]){
            $number = $arr[$i];

            break;
    	}
	}
	if ($arr[0]>$arr[1] && $arr[0]> $arr[count($arr)-1]){
	 	echo "<p>0</p>"; //проверявам първият елемент с индекс 0
	}else{
		//проверявам последният елемент
		if ($arr[count($arr)-1]>$arr[0] && $arr[count($arr)-1]>$arr[count($arr)-2]){
		echo "<p>".(count($arr)-1)."</p>";
		}else{
			if ($number == min($arr)){
	 		echo "no such element";
	 		}else{
	 			echo "<p>".$i."</p>";
	 		}
		}
	}	 
    
}

compare_number([2, 11, 2, 3, 0, 2]);
compare_number([0, 4, 7, 0, 0, 0]);
compare_number([4, 15, 27, 33, 1]);
compare_number([1, 1, 1, 1]);
compare_number([27, 22, 11, 4]);
compare_number([25, 3, 2, 22, 28]);
