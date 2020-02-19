<?php 
echo "<p>task_1 Отпечатайте числата от 1 до 100 и намерете тяхната сума</p>";

$sum = 0;

	for($i = 1; $i <= 100; $i++){
	echo $i." ";
	$sum = $sum + $i;
}

echo "<p> The sum is ".$sum."</p>";

echo "<p>task_2 Да се отпечатат всички четни числа от 20 до 40</p>";
for ($i=20; $i <=40 ; $i++) { 
	if ($i %2 ==0) {
		echo $i." ";
	}
}
echo "<p>task_3 Като използвате цикъл for, напишете програма, която отпечатва всички числа в интервала x - y, които се делят на 3 или на 7</p>";
$x = 20;
$y =40;
if ($x<$y){
	for ($i=$x; $i <=$y; $i++) { 
		if ($i % 3 ==0 || $i % 7 ==0  ) {
		echo $i." ";
		}
	}	
}else{
	for ($i=$y; $i <=$x; $i++) { 
		if ($i % 3 ==0 || $i % 7 ==0  ) {
		echo $i." ";
		}
	}	
}

echo "<p>task_4 Напишете програма, която проверява всички числа от 1 до 20 и отпечатва на екрана съобщение - Числото х е четно/нечетно. </p>";

for ($i=1; $i <=20; $i++) { 
	if ($i %2 ==0) {
		echo "<p>".$i." is even </p>";
	}else{
		echo "<p>".$i." is odd </p>";
	}
}
echo "<p>task_5 Напишете програма, генерираща масив с 10 елемента със случайни стойности, намиращи се в определен интервал</p>";
$x = 10;
$y = 30;
$arr =[];
if ($x < $y) {
	echo "[";
	for ($i=0; $i <10 ; $i++) { 
		$arr[$i] = rand($x,$y);
		echo $arr[$i].",";
	}
	echo "] <br>";
	print_r($arr);

}
echo "<p>task_6 Напишете програма, която изчислява и отпечатва средната температура  за период от 3 месеца /90 дни/, отпечатва петте най-ниски и петте найвисоки температури. /hint генерирайте масив като използвате rand() за температурите в </p>";
$arr = [];
$sum = 0;
$num_of_temps = 90;

for($i = 0; $i < $num_of_temps; $i++){
	$arr[] = rand(0, 50);
}

for($k = 0; $k < $num_of_temps; $k++){
	$sum = $sum + $arr[$k];
}

$avg_temp = $sum/$num_of_temps;

echo $avg_temp;

$arr_high = sort($arr);

$lowest_temp = 5;
for($m = 0; $m < $lowest_temp; $m++){
	echo $arr[$m] . ' / ';
}

rsort($arr);
$highest_temp = 5;

echo 'Highest temps ';
for($n = 0; $n < $highest_temp; $n++){
	echo $arr[$n] . ' // ';
}
echo "<p>";
var_dump($arr);
echo "</p>";

echo "<p>";
var_dump($arr_high);
echo "</p>";
echo "<p>task_7 Напишете програма, която създава масив от 20 елемента, като стойността на всеки елемент се получава от произведението на съответния индекс и 5.</p>";
echo "<p>task_8 Напишете програма, която намира най-малкия елемент в масив, различен от 0 и го отпечатва в браузъра.</p>";
$arr = [1, 8, 0, 5, 7];

$count = count($arr);

$min = $arr[0];

for($i = 1; $i < $count; $i++){

	if($arr[$i]!=0 && $arr[$i] < $min) {
		$min = $arr[$i];
	}
}
echo $min;
echo "<p>task_9 Напишете програма, която намира най-големия елемент в масив и го отпечатва в браузъра</p>";
echo "<p>task_17</p>";

$num = 1;;
for ($i=1; $i < 30; $i++) { 
	for ($j=1; $j <10 ; $j++) { 
		echo $num++. '';
	}
	echo "<br>";
}
echo "task_18";
$m= 5;
$n= 5;
echo "<table border =1>";

for ($i=0; $i <$m ; $i++) { 
	echo "<tr>";
	for ($j=0; $j < $n; $j++) { 
		echo "<td>".$i.".".$j."</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "task_19";
$x=rand(0,100) ;
echo "<table border=1>";


echo "<tr>";
echo "<td>";
	if ($x %2 ==0) {
		echo $x;
	}
echo "</td>";
echo "<td>";
echo sqrt($x);
echo "</td>";
echo "</tr>";
echo "</table>";