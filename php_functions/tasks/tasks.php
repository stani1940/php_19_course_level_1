<?php 
//tassk_1
function sum_numbers($a,$b){
		echo $a+$b."<br>";
}
 sum_numbers(4,7);

 sum_numbers(5,8);
echo "<p>task_2 Дефинирайте функция, която отпечатва числата от 42 до 11.</p>";
function print_numners($tag){
	for ($i=42; $i >=11 ; $i--) { 
		echo "<$tag>".$i."</$tag>";
	}
}
 print_numners('h1');
 print_numners('h5');
echo "<p>task_3 Дефинирайте функция/функции, които по зададен масив отпечатват всички негови елементи и намира и отпечатва сумата на елементите с четен индекс.  Да се извика/т функцията/иите 2 пъти за 2 различни масива.</p>";
//$arr =[4,5,7,8,12,48];
function print_array_el_sum($arr){
	$sum=0;
	for ($i = 0; $i <count($arr) ; $i++) {
			echo $arr[$i]." "; 
		if ($i %2 ==0) {
			 $sum+=$arr[$i];
		}
	}
	echo "<p> Сумата на елементите с четен индекс е: ".$sum."</p>";
 }
 print_array_el_sum([4,5,7,8,12,48]);
 print_array_el_sum([11,28,47,5,10,18]);
