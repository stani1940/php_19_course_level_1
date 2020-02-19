<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<p>Декларирайте функция, която отпечатва индекса на първия елемент, който е по-голям от двата си съседни елемента. Ако няма такъв елемент -функцията да връща съответния отговор. /За елемента с индекс 0 съседни са елементите с индекс1 и последния елемент в масива. За последния елемент –съседни са предпоследния и елементът с индекс 0/. a. Дайте възможност на потребителите да задават стойностите на масива с форма"</p>

	<p>a)</p>
	<form method="get" action="">
		<LABEL> въведи масив от числа</LABEL>
		<input type="text" name="arr">
		<input type="submit" name="submit">

	</form>
</body>
</html>
<?php 

if (isset($_GET['submit'])) {
	if (isset($_GET['arr'])) {
		$arr = explode(", ",$_GET['arr']);	
		compare_number($arr);
	}else 
	echo "plese fill the input field";
}

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
?>