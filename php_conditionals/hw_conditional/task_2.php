﻿<?php
$problem = "Зад. 2 Напишете програма, която по зададени единици използвана електроенергия и тяхната цена изчислява сметката за ток, при следните условия.1.За първите 50 единици -0,10 лв/единица2.За следващите 100 -0,15 лв./единица3.За следващите 100 -0,25 лв./единица4.За следващите -0,35 лв/единица.Към общата сметка се добавят 20% ДДС.";
echo "<p>".$problem."</p>";
$kilovat = 302;
//$kilovat = 150;
//$kilovat = 155;
//$kilovat = 201;
$dds = 1.2;
$price_1 = 0.1;
$price_2 = 0.15;
$price_3 = 0.25;
$price_4 = 0.35;
$first = 50*$price_1*$dds;
$second = ($kilovat-50)*$price_2*$dds;
$third = ($kilovat-150)*$price_3*$dds;
$fourth = ($kilovat-250)*$price_4*$dds;
if ($kilovat<=50) {		
	$sum = $kilovat*$price_1*$dds;	
	echo "<p>".$sum." лева</p>";
}elseif ($kilovat>50 && $kilovat<=150) {
	$sum = $first+$second;
	echo "<p>".$sum." лева</p>";
}elseif ($kilovat>150 && $kilovat<=250) {

	$tsum = $first+(100*$price_2*$dds)+$third;
	echo $tsum;	
}elseif ($kilovat>250 && $kilovat<=350) {

	$tsum = $first+(100*$price_2*$dds)+(100*$price_3*$dds)+$fourth;
	echo $tsum."лева";	
}
