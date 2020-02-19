<?php
	if (!empty($_GET['submit'])) {
		if (!empty($_GET['name']) && !empty($_GET['city']) ) {
		$name = $_GET['name']; 
		$city = $_GET['city'];
		echo "Hellow ".$name." your favourite city is ".$city;
		echo "<p><a href='input_array_tasks.php'>Back</a></p>";
		
		}else{
			echo "please fill the form";
		 
		
	}		}
