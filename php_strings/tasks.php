<?php 
$str = 'AKIOBI';

$str_to_lower =strtolower($str);

echo $str_to_lower;
$str1 ='booki';
echo strtoupper($str1);	

	
$str_first = str_split($str1);
echo strtoupper($str_first[0])."</br>";

function checkstr($a){
	

if (strpos($a, 'are') !== false) {
    echo 'true';
}else{
	echo "false";
}
}
checkstr('How drive you');


$str_new ="fgiMMMfg GJ54545IGG 123";
$str_2 =str_split($str_new);
for ($i=0; $i <strlen($str_new) ; $i++) { 
	if (ord($str_new[$i])>=65 && ord($str_new[$i]<=90)) {
	echo $str_new[$i]."</br>";
	}
	if (ord($str_new[$i])>=97 && ord($str_new[$i]<=122)) {
	echo $str_new[$i]."</br>";
	}
	if (ord($str_new[$i])>=48 && ord($str_new[$i]<=57)) {
	echo $str_new[$i]."</br>";
	}
	
	

}
echo "<p>Task_1. Дефинирайте функция,която кодира даден текст на английски последния начин: на първата половина от текста всички букви‘a’сезаменят от‘u’ и всички букви ‘t’ се заменят от ‘v’.Във втората половина оттекста–всичкибукви‘e’сезаменятот‘o’ивсички‘s’сезаменятот‘p’.b.направетевариантзатекстнакирилица.Функциятаразделятекстанадвечасти.Буквите,коитотърсиизаменязапърватаивторатачастподавайтесформа.</p>";


$str_8 = 'Take a shot.';
//echo str_replace("a","u",'Take a shot.');

for ($i=0; $i < strlen($str_8); $i++) { 
 		if ($i<strlen($str_8)/2) {
 			$find = array('a','t');
 			$replace =array('u','v');	
 			print_r(str_ireplace($find,$replace,$str_8[$i]));
 			

 			
 		}else{
 			//echo str_replace("s","p",$str_8[$i])." ";
 		}
 			
	 	//echo $str_8[$i]; 
	 }
 		
	

 ?>