<?php
echo "<p>2.1)<p/>";
$m = 4;
$n = 5;
$num = 3;
$k = 66;
$p = 150;
$matrix = array(array());
for ($i=0; $i<$m; $i++) { 
	for ($j=0; $j<$n; $j++) {
		$matrix[$i][$j]=$num;
		$num+=2;

		if ($i ==2) {
			
			$matrix[$i][$j]=$k;
			$k+=2;
		}
		if ($i ==3) {
			
			$matrix[$i][$j]=$p;
			$p+=2;
		}
	}
	$num+=11;

}
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) {
	echo "<tr>"; 
	for ($j=0; $j <$n ; $j++) { 
		echo  "<td>".$matrix[$i][$j] ."</td>";	
	}
	echo "<tr/>";
}
echo "</table>";
echo "<p>2.2)<p/>";
$m=5;
$n=4;
$num=1;
$matrix=array(array());
for ($i=0; $i<$m ; $i++) { 
	for ($j=0; $j<$n ; $j++) { 
		
		$matrix[$i][$j]=$num;
		$num+=15;
	}
	$num-=57;
}
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) {
	echo "<tr>"; 
	for ($j=0; $j <$n; $j++) { 
		echo  "<td>".$matrix[$i][$j] ."</td>";	
	}
	echo "<tr/>";
}
echo "<table/>";
echo "<p>2.3)<p/>";
$m = 4;
$n = 4;
$a = 1;
$b=8;
$k =16;
$matrix=array(array());
for ($i=0; $i<$m ; $i++) { 
	for ($j=0; $j<$n; $j++) { 
			
			$matrix[$i][$j]=$a;
			
			if ($i%2==0) {
				$matrix[$i][$j]=$a;
				$a++;
					
			}else{
				$matrix[$i][$j]=$b;
				$b--;
				$a++;
				if ($i == 3) {
					$matrix[$i][$j]=$k;	
					$k--;					
				}

			}
	}	
}
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) {
	echo "<tr>"; 
	for ($j=0; $j <$n ; $j++) { 
		echo  "<td>".$matrix[$i][$j] ."</td>";	
	}
	echo "<tr/>";
}
echo "<table/>";

echo "<p>2.4)<p/>";
$m = 5;
$n = 5;
$k = $m*$n;
$matrix=array(array());
for ($i=0; $i<$m ; $i++) { 
	for ($j=0; $j<$n ; $j++) { 
		
		$matrix[$i][$j]=$k;
		$k-=$m;
	}
	$k+=24;
}
echo "<table border=1>";
for ($i=0; $i <$m ; $i++) {
	echo "<tr>"; 
	for ($j=0; $j <$n ; $j++) { 
		echo  "<td>".$matrix[$i][$j] ."</td>";	
	}
	echo "<tr/>";
}
echo "<table/>";