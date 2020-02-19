<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Task_1</title>
</head>
<body>
	<form method="get" action="">
		<label>Please enter your age</label><input type="text" name="age">
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php 

if (isset($_GET['submit'])&&!empty($_GET['age']) ) {
	
	$age = $_GET['age'];
	if (is_numeric($age)) {
	
		if ($age>=18) {
		echo "<ul>
				<li>Wiski</li>
				<li>Vodka</li>
				<li>Byrban</li>
			</ul>";
		}else{
		echo "<ul>
				<li> Kola</li>
				<li> Sveps</li>
				<li> Sprite</li>
			</ul>";
		}
	}else{
	echo "Please enter number value";
	}
}

 ?>