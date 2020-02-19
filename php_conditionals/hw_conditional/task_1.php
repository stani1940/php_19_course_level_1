<?php 
$problem ="Да се напише програма, която подрежда 3 числа в нарастващ ред. ";
echo $problem;

$a = 19;
$b = 2;
$c = 60;
//$a = 65;
//$b = 30;
//$c = 4;
//$a = 19;
//$b = 2;
//$c = 60;
//$a = 18;
//$b = 2;
//$c = 2;
echo "<p>1 ви Вариант</p>";
echo "<pre>";
if ($a < $b && $b < $c) {
	echo $a." ".$b." ".$c;
}
elseif ($a < $b && $b > $c) {
	if ($a < $c) {
		echo $a." ".$c." ".$b;
	}
	else echo $c." ".$a." ".$b;
}
elseif ($c < $b && $b < $a) {
	echo $c." " .$b." ".$a;
}
elseif ($c > $b &&  $b < $a) {
	if ($a < $c) {
		echo $b." ".$a." ".$c;
	}
	elseif ($a > $c) {
	 	echo $b." ".$c." ".$a;
	 } 
}
echo "<p>2ри вариант</p>";
$var = array($a, $b, $c);
			
		sort($var);
			echo '<p>Подреден масив в нарастващ ред</p>';
			print_r($var);

