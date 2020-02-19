<?php 
$arr = ['banan','avokado','apple','nar'];
$max = 0;
			for ($i=0; $i <count($arr); $i++) { 
			 	if ($max <= strlen($arr[$i])) {
				$max = strlen($arr[$i]);
				
				}
					
			 } 
			
	echo  "<p> Най-голямата дължина е ".$max."</p>";

$min = $arr[0];
	for ($i=0; $i <count($arr) ; $i++) { 
		if (strlen($arr[$i]<$min  )) {
			$min = strlen($arr[$i]);
		}
					
	}
echo  "<p> Най-малката дължина на елемент е ".$min."</p>";