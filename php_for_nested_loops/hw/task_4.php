<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<p>	task_4. Напишете програма, при която от форма получаваме редица 	от числа разделени със запетая и интервал. Програма отпечатва 		таблица. В първата колона са отпечатани числата, във втората - 		сумата от цифрите на съответното число. Ако е подадена 				стойност, която не е число - в таблицата се отпечатва - “Не 		мога да сумирам”. 
 	</p>
 <form action="" method="get" >
 	<input type="text" name="collection">
 	<input type="submit" name="submit">
 </form>
 
 </body>
 </html>
 <?php 
if (!isset($_GET['submit'])) {
	echo "Моля попълни формата";
}else{

	$str = $_GET['collection'];
	if (empty($str)) {
		echo "Моля попълни числа, разделени с точка и интервал ";
	}else{


	$str_arr = explode(', ', $str); //array of strings
	$number_arr = array_map("intval",$str_arr); //array of numbers

	echo "<p>1ви вариант</p>";
	echo "<table border='1'";
	for ($i=0; $i <count($str_arr); $i++) {
		$sum1 = 0;
		echo "<tr>"; 
		echo "<td>".$str_arr[$i]."</td>";
		if (is_numeric($str_arr[$i])) {
			for ($j=0; $j <strlen($str_arr[$i]); $j++) { 
		 	//var_dump($sum);

		 		$sum1+=array_sum(str_split($str_arr[$i][$j]));
			}

		echo "<td>".$sum1."</td>";
		}else{
			echo "<td>Не мога да сумирам</td>";
		}
		echo "</tr>";
	}

echo "</table>";
echo "<p>2ри вариант</p>";
echo "<table border='1'";
for ($i=0; $i <count($number_arr); $i++) {
	echo "<tr>"; 
	echo "<td>".$number_arr[$i]."</td>";
	if ($number_arr[$i]!=0) {
		$sum =0;
		 	//var_dump($number_arr[$i]);
		 	$number=$number_arr[$i];
			do {
    		$sum+= $number % 10;
				}
			while ($number = (int) $number / 10);

		echo "<td>".$sum."</td>";
	}else{
		echo "<td>Не мога да сумирам</td>";
	}

	echo "</tr>";
}
echo "</table>";
}	
}

//var_dump($number_arr);
  ?>