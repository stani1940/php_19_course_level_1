<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Task 1 Guess Number</title>
</head>
<body>
	<p>Please enter your favourite day</p>
<form method="get" action="">
	<input type="text" name="day" placeholder='day'>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php

	if (!empty($_GET['submit'])) {
		$day = $_GET['day'];
		$week_info = [ "monday"=>"Laugh on Monday, laugh for danger.",
  				"tuesday"=>"Laugh on Tuesday, kiss a stranger.", 
  				"wednesday"=>"Laugh on Wednesday, laugh for a letter.", 
  				"thursday"=>"Laugh on Thursday, something better.",
  		 		"friday" =>"Laugh on Friday, laugh for sorrow.",
  		 		"saturday" =>"Laugh on Saturday, joy tomorrow.",
  		 	];
  		$keys = array_keys($week_info);// взима ключовете от масива
  		 	
	 	switch ($day) {	
		 	case $day == $keys[0]:
				echo $week_info['monday'];	
	 		break;
		case $day == $keys[1]:
	 		echo $week_info['tuesday'];
	 	break;
	 	case $day == $keys[2]:
			echo  $week_info['wednesday'];
		break;
		case $day == $keys[3]:
			echo $week_info['thursday'];
		break;	
		case $day == $keys[4]:
			echo $week_info['friday'];	
		break;
		case $day == $keys[5]:
			 echo $week_info['saturday'];
		break;
		case $day == 'sunday':
			 echo "Day is a hollyday";
		break;
	
	 	default: 
	 		echo 'please enter valid day';
	 	break;	
}
	}
		
  		 	
  ?>
