<?php 
$num = 0;
$arr = [];
function matrix($rows,$cols){
for($i = 0; $i < $rows; $i++){
	$arr[$i] = [];
	$num = 1*($i+1);
	for($j = 0; $j < $cols; $j++){
		$arr[$i][$j] = $num;
		$num += 4+10*$i;
	}
}

echo "<table border=1>";
 for($m = 0; $m < $rows; $m++){
 	echo "<tr>";
 	for($n = 0; $n < $cols; $n++){
 		echo "<td>".$arr[$m][$n]."</td>";
 	}
 	echo "</tr>";
 }
echo "</table>";
}
echo matrix(5,5);