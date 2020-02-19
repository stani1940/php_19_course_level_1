<?php 
$problem ="Да се декларира функция, която отпечатва индексите на елементите на масив и тяхната стойност. Масивът е с произволен брой елементи и всеки негов елемент е с произволна дължина";

echo $problem;	
$arr = array(array());
function key_value_array($arr){
	
	for ($i=0; $i <count($arr); $i++) { 
		foreach ($arr[$i] as $key => $value) {
			echo "<p>a[$i][$key]=$value</p>";
		}
		
	}
}

key_value_array([[5, 14, 2], [20, 9, 4]]);
key_value_array([['arr', 1], [1, 8, 'demo array'], ['true']] );
 