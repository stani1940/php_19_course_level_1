<?php
$problem ="4. Зад. Напишете програма, която в зависимост от въведеното число от 1-12 връща името на съответния месец.";
echo "<p>".$problem."</p>";
$i = 10;
//$i =5;
//$i =10;
//$i =12;
//$i =13;
switch ($i) {	
	case $i == 1:
	echo 'January';	
	break;
	case $i == 2:
	echo 'February';
	break;
	case $i == 3:
	echo 'March';
	break;
	case $i == 4:
	echo 'April';
	break;	
	case $i == 5:
	echo 'May';	
	break;
	case $i == 6:
	echo 'June';
	break;
	case $i == 7:
	echo 'July';
	break;
	case $i == 8:
	echo 'August';
	break;
	case $i == 9:
	echo 'September';
	break;
	case $i == 10:
	echo 'October';
	break;
	case $i == 11:
	echo 'November';
	break;
	case $i == 12:
	echo 'December';
	break;
	default: 
	echo 'please enter valid month';
	break;	
}