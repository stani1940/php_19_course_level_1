<?php 
$laptops = [
	['producer' => 'dell', 'model' => 'vostro', 'processor' => 'intel', 'RAM' => 16, 'HD'=>1000,'SSD' => 120, 'price' => 1250],
	['producer' => 'toshiba', 'model' => 'satelite', 'processor' => 'amd', 'RAM' => 8, 'HD'=>1200, 'SSD' => 240, 'price' => 1500],
	['producer' => 'lenovo', 'model' => 'thinkpad', 'processor' => 'intel', 'RAM' => 12,'HD'=>500, 'SSD' => 500, 'price' =>2000],
	['producer' => 'acer', 'model' => 'aspire', 'processor' => 'intel', 'RAM' => 16, 'HD'=>600,'SSD' => 124, 'price' =>2200],
	['producer' => 'msi', 'model' => 'gv62', 'processor' => 'amd', 'RAM' => 4, 'HD'=>750, 'SSD' => 750,'price'=>1800],
		];


		//ИПК = ((HD + SSD*3)+RAM)/P

$count = count($laptops);

echo "<table border=1>";
echo "<tr>
		<td>Producer</td>
		<td>Model</td>
		<td>Processor</td>
		<td>RAM</td>
		<td>HDD</td>
		<td>SSD</td>
		<td>PRICE</td>
		<td>IPK</td>
	</tr>";
$sum = 0;
for ($i=0; $i < $count; $i++) { 
	$current = (($laptops[$i]['HD']+($laptops[$i]['SSD'])*3)+$laptops[$i]['RAM'])/$laptops[$i]['price'];

	$laptops[$i]['IPK'] = number_format($current,2);
	$max_index = max(array_keys(array_column($laptops,'IPK')));
	echo "<tr>";
	foreach ($laptops[$i] as $key => $value) {
		echo "<td>$value</td>";
	}
	$sum += $laptops[$i]['IPK'];
	echo "</tr>";
		
}
$avg = $sum/$count;
echo "<tr>
		<td colspan =7> Average IPK</td>
		<td>". $avg."</td>
	</tr>";
echo "<tr>
			<td colspan ='3'> Laptop with highest IPK is</td>
			<td>".$laptops[$max_index]['producer']." model is ".$laptops[$max_index]['model']." </td>
		</tr>";
echo "</table>";





