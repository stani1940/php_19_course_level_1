<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Task 1 Guess Number</title>
</head>
<body>
	<p>Please enter number in interval 0-10</p>
<form method="get" action="">
	<input type="number" name="number" placeholder='number'>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php

if (isset($_GET['submit'])) {
	
		$number = $_GET['number'];
		if ($number >= 0 && $number <= 10){
			$guess_number = rand(0,10);		
			//var_dump($guess_number);
			if ($number == $guess_number) {
			echo "You guess! The number is ".$guess_number;
			}else{
				if ($number > $guess_number) {
				echo "You don`t guess Your number is more than guess_number";	
				}else{
				echo "You don`t guess Your number is less than guess_number";
				}
			}
		}else{
			echo "please enter valid number in interval 0-10";
		}
		
}else{
		echo "Please enter number";
	}



 ?>