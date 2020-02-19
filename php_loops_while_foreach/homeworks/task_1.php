<?php
$problem = "1. Да се напише програма, която отпечатва следната последователност от букви:
а
а а
а а а
...
а а а .... а     (n на брой пъти)";
echo "<p>".$problem."</p>";
echo "<p>Вариант 1</p>";
$n = 5;
$a = ' a ';
for ( $i = 0; $i <= $n; $i++) {
            for ( $j = 0; $j < $i; $j++) {
               echo $a." ";
            }
            echo "<p></p>";
        }
echo "<p>Вариант 2</p>";
$counter= 0;
while ($counter<= $n) {
	$counter++;
	echo str_repeat($a,$counter);
	echo "<p><p>";
}

