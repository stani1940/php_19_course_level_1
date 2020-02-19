<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Task 2 Collect user information in table interface</title>
	<style type="text/css">
		body{
			margin: 0px auto;
		}
		table{
			border: solid 2px;
			margin: 0px auto;
		}

		td{
			border: solid 2px;
		}
	</style>
</head>
<body>
	<p> Task 2 Collect user information in table interface</p>
	<p>Please enter user information</p>
<form method="post" action="">
	<input type="text" name="name" placeholder='name'>
	<input type="text" name="surname" placeholder='surname'>
	<input type="text" name="family" placeholder='family'>
	<input type="text" name="egn" placeholder='egn'>
	<input type="text" name="education" placeholder='education'>
	<input type="text" name="profession" placeholder='profession'>

	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php 

if (!empty($_POST['submit'])) {
	$name = $_POST['name'];
		$surname = $_POST['surname'];
		$family = $_POST['family'];
		$egn = $_POST['egn'];
		$education = $_POST['education'];
		$profession = $_POST['profession'];
	if (!empty($name) && !empty($surname) && !empty($family) && !empty($egn) && !empty($education) && !empty($profession)) {
		echo "<p>CV</p>";
		echo "<table>";
		echo "<tr><td>Име</td><td>".$name."</td></tr>";
		echo "<tr><td>Презиме</td><td>".$surname."</td></tr>";
		echo "<tr><td>Фамилия</td><td>".$family."</td></tr>";
		echo "<tr><td>ЕГН</td><td>".$egn."</td></tr>";
		echo "<tr><td>Образование</td><td>".$education."</td></tr>";
		echo "<tr><td>Професия</td><td>".$profession."</td></tr>";
		echo "</table>";
	}else{
			echo "please fill in the forma";
		}
}

 ?>
