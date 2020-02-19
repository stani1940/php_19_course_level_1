<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tаблица за умножение</title>
</head>
<body>
	<p>Task 3. Напишете програма, която отпечатва на екрана таблицата за умножение - 1*1 = 1, 2*1 =2 и т. н.  Да се сложи в таблица с border=1 и празните полета да са с colspan. /вижте снимката по-долу/. </p>	
<?php
echo "<table border = '1'>";

	for ($count1 = 1; $count1 <= 10; $count1++) {
	echo "<tr>";
		
		for ($count2 = 1; $count2 <= $count1; $count2++){
		
		 echo "<td>";
		 echo "$count1*$count2=".($count1 * $count2);
		 echo "</td>";
		 }
			if ($count1==9) { 
			echo "<td></td>"; 
			}elseif ($count1<9) {
        	echo "<td colspan='".(10-$count1)."'></td>";
      		}	
	echo "</tr>";
	}
echo "</table>";
?>
</body>
</html>
