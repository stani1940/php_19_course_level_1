<?php
header('Content-type: text/html; charset=utf-8');
$problem = "Създайте двумерен масив с информация за три имена на ученик /5 ученика/, срочна оценка по 4 предмета.  a. Отпечатайте информацията, съдържаща се в масива в таблица. b. Изчислете средния успех на всеки ученик и го добавете като елемент в масива. c. Изчислете средния успех на учениците – по предмети, общия среден успех на всички ученици за срока. d. Отпечатайте в колона за всеки ученик на кое място е по среден успех в класа. 
 ";
 echo "<p>".$problem."</p>";

$students = [
 	['name' => 'Борис', 'surname' => 'Димитров', 'family' => 'Гинев', 'math' => 5, 'literatura' => 6, 'biology' => 4, 'chemistry' => 3, ],
	['name' => 'Георги', 'surname' => 'Тодоров', 'family' => 'Петров', 'math' => 3, 'literatura' => 4, 'biology' => 4, 'chemistry' => 2,],
 	['name' => 'Любен', 'surname' => 'Николов', 'family' => 'Иванов', 'math' => 3, 'literatura' => 5, 'biology' => 6, 'chemistry' => 5,],
 	['name' => 'Николай', 'surname' => 'Руменов', 'family' => 'Донев', 'math' => 4, 'literatura' => 2, 'biology' => 6, 'chemistry' => 3,],
 	['name' => 'Петко', 'surname' => 'Илиев', 'family' => 'Лалов', 'math' => 4, 'literatura' => 6, 'biology' => 5, 'chemistry' => 6,],
];

echo '<table border=1>';
echo '<tr>';
echo '<td>Име</td>';
echo '<td>Презиме</td>';
echo '<td>Фамилия</td>';
echo '<td>Математика</td>';
echo '<td>Литература</td>';
echo '<td>Биология</td>';
echo '<td>Химия</td>';
echo '<td>Среден успех</td>';
echo '<td>№ на ученика по успех</td>';
echo '</tr>';

$sum = 0;
$sum_1 =0;
$sum_2 =0;
$sum_3 =0;
$success = array_map('array_sum', $students);
//var_dump($success);

	foreach ($success as $value) {

	 $p = $value/(count($success)-1);
	}
 
	
$avg=array_column($students[$i],0);
 	array_push($students[0], $success[0]/(count($success)-1));
	array_push($students[1], $success[1]/(count($success)-1));
	array_push($students[2], $success[2]/(count($success)-1));
	array_push($students[3], $success[3]/(count($success)-1));
	array_push($students[4], $success[4]/(count($success)-1));
print_r($students); //показвам, че е добавен елемент към масива

$average_ocenka=array_column($students,0);
$max = max($average_ocenka);
$min = min($average_ocenka);
rsort($average_ocenka);			
//array_multisort( array_column($students, 0), SORT_ASC, $students );

for( $i = 0; $i < count($students); $i++){

	echo "<tr>";
	foreach ($students[$i] as $key => $value) {
		echo '<td>';
		echo $value;
		echo '</td>';		
	}
	$sum += $students[$i]['math'];
	$sum_1 += $students[$i]['literatura'];
	$sum_2 += $students[$i]['biology'];
	$sum_3 += $students[$i]['chemistry'];
	if ($students[$i]['0']==$max) {
		echo "<td>1</td>";
	}elseif ($students[$i]['0']==$min) {
		echo "<td>".count($students)."</td>";
	}elseif ($students[$i]['0']==$average_ocenka[1]) {
		echo "<td>2</td>";
	}elseif ($students[$i]['0']==$average_ocenka[2]) {
			echo "<td>3</td>";
	}elseif ($students[$i]['0']==$average_ocenka[3]) {
			echo "<td>4</td>";
	}

	echo "</tr>";
}

$avg_digit = $sum/count($students);
$avg_digit_1 = $sum_1/count($students);
$avg_digit_2 = $sum_2/count($students);
$avg_digit_3 = $sum_3/count($students);
echo "<tr>
		<td colspan='3'>Среден успех по предмети</td>
			<td>$avg_digit</td>
			<td>$avg_digit_1</td>
			<td>$avg_digit_2</td>
			<td>$avg_digit_3</td>
		</tr>";
echo '</table>';




  ?>