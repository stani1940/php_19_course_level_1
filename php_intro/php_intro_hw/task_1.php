<?php
$problem ="Опишете с PHP програма за изчисляване на периметъра и лицето на различни геометрични форми – изпробвайте с три различни стойности на променливите. ";
echo $problem;
$rectangler="Rectangler";
$a =10;
$b= 20;
$s=$a*$b;

echo "<p>".$rectangler.", a= ".$a.", b=".$b."; S = ".$s."</p>";
$a =40;
$b= 50;
$s=$a*$b;
echo "<p>".$rectangler.", a= ".$a.", b=".$b."; S = ".$s."</p>";
$a =20;
$b= 50;
$s=$a*$b;
echo "<p>".$rectangler.", a= ".$a.", b=".$b."; S = ".$s."</p>";

$square="Square";

$d = 15;
$area=$d*$d;

echo "<p>".$square.", a = ".$d."; S = ".$area."</p>";
$d = 10;
$area=$d*$d;
echo "<p>".$square.", a = ".$d."; S = ".$area."</p>";
$d = 8;
$area=$d*$d;
echo "<p>".$square.", a = ".$d."; S = ".$area."</p>";
$triangle="Triangle";
$osnova = 10;
$height =15;
$sTriangle=($osnova*$height)/2;

echo "<p>".$triangle.", a= ".$osnova.", ha= ".$height."; S = ".$sTriangle."</p>";
$osnova = 5;
$height =8;
$sTriangle=($osnova*$height)/2;
echo "<p>".$triangle.", a= ".$osnova.", ha= ".$height."; S = ".$sTriangle."</p>";

$osnova = 12;
$height =40;
$sTriangle=($osnova*$height)/2;
echo "<p>".$triangle.", a= ".$osnova.", ha= ".$height."; S = ".$sTriangle."</p>";
$circle = "Circle";
$r=15;
$pi= pi();
$sCircle=$pi*$r*$r;
$number=number_format($sCircle,1);	
echo "<p>".$circle.", r = ".$r.", S = ".$number."</p>";
$r=45;
$sCircle=$pi*$r*$r;
$number=number_format($sCircle,1);
echo "<p>".$circle.", r = ".$r.", S = ".$number."</p>";
$r=35;
$sCircle=$pi*$r*$r;
$number=number_format($sCircle,1);
echo "<p>".$circle.", r = ".$r.", S = ".$number."</p>";
?>