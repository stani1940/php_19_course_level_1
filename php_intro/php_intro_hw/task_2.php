<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$problem ="Зад 2. Отпечатайте като таблица решенията на предишната задача, като в първата колона поставите променливите и техните стойности, във втората колона получената площ. Разграничете данните от първата и втората колона чрез различен цвят на текста.";
echo $problem;
?>
<table>
	<tr>
		<td class="left">Input</td>
		<td class="right">Output</td>
	</tr>
	<tr>
		<?php
		echo "<td class='left'>";
			$rectangler="Rectangler";
			$a =10;
			$b= 20;
			$s=$a*$b;
		 echo $rectangler.", a= ".$a.", b=".$b;
		 echo "</td>";
		 echo "<td class='right'>
		 S = ".$s."</td>";
		 
		 ?>
	</tr>
	<tr>
		<?php
		echo "<td class='left'>";
			$square="Square";
			$d = 15;
			$area=$d*$d;
		 echo $square.", a = ".$d;

		 echo "</td>";
		 echo "<td class='right'>
		 S = ".$area."</td>";
	
		 ?>
	</tr>
	<tr>
		<?php
		echo "<td class='left'>";
			$triangle="Triangle";
			$osnova = 10;
			$height =15;
			$sTriangle=($osnova*$height)/2;
		 echo $triangle.", a= ".$osnova.", ha= ".$height;

		 echo "</td>";
		 echo "<td class='right'>
		 S = ".$sTriangle."</td>";
		 ?>
	</tr>
	<tr>
			<?php
		echo "<td class='left'>";
			$circle = "Circle";
			$r=15;
			$pi= pi();
			$sCircle=$pi*$r*$r;
			$number=number_format($sCircle,1);	
		echo $circle.", r = ".$r."</td>";
		 echo "<td class='right'>
		 S = ".$number."</td>";
		 ?>
	</tr>
</table>
</body>
</html>



