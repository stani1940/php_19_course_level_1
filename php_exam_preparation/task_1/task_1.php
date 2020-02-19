<?php 
if (isset($_POST['submit'])) {
	if (!empty($_POST['text'])&& is_numeric($_POST['text'])) {
		$consumption = $_POST['consumption'];
		$condition = $_POST['conditions'];
		$new_consumption = $consumption + ($consumption*$condition)/100;
		echo $new_consumption;
	}else{

		echo "попълни с числова стойност";
	}
}


 