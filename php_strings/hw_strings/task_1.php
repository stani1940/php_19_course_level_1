<?php 
echo "<p>Task_1. Дефинирайте функция,която кодира даден текст на английски последния начин: на първата половина от текста всички букви‘a’сезаменят от‘u’ и всички букви ‘t’ се заменят от ‘v’.Във втората половина оттекста–всичкибукви‘e’сезаменятот‘o’ивсички‘s’сезаменятот‘p’.b.направетевариантзатекстнакирилица.Функциятаразделятекстанадвечасти.Буквите,които търси и заменя запърватаивторатачастподавайтес форма.</p>";

function code_str_a($str){

for ($i=0; $i < strlen($str); $i++) { 
 		if ($i<strlen($str)/2) { //първа половина на текста
 			$find = array('a','t');
 			$replace =array('u','v');	
 			print_r(str_ireplace($find,$replace,$str[$i]))." ";
 			
 		}else{// втора половина
 			$find = array('e','s');
 			$replace =array('o','p');
 			print_r(str_ireplace($find,$replace,$str[$i]))." ";
 		}
 			
	 	
	 }
 }


code_str_a('Take a shot.');
code_str_a('Placeholders');

function code_str_b($str){
	if (isset($_GET['submit'])) {
		
			//var_dump($_GET['char_1']);
			for ($i=0; $i < strlen($str); $i++) { 
 				if ($i<strlen($str)/2) { //първа половина на текста
 				$find = array($_GET['char_1'], $_GET['char_2']);
 				
 				$replace =array($_GET['char_3'], $_GET['char_4']);	
 			    print_r(str_ireplace($find,$replace,$str[$i]))." ";
 			
 				}else{// втора половина
 				$find = array($_GET['char_5'],$_GET['char_6']);
 				$replace =array($_GET['char_7'],$_GET['char_8']);
 				print_r(str_ireplace($find,$replace,$str[$i]))." ";
 				}
	 		
		}
	
	}
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title></title>
 	<meta charset="utf-8">
 </head>
 <body>
 	<p>b)</p>
 		<form method="get" action="">
 			
 			<p><LABEL>Първа половина от текста</LABEL><p>
 			<LABEL>Търси символ</LABEL><input type="text" name="char_1">
 			<LABEL>Замени символ с</LABEL><input type="text" name="char_3">
 			<label>Търси символ</label><input type="text" name="char_2">
			
 			<label>Замени с</label><input type="text" name="char_4">
 			<p>Втора половина от текста</p>
 			<LABEL>Търси символ</LABEL><input type="text" name="char_5">
 			<LABEL>Замени символ с</LABEL><input type="text" name="char_7">
 			<label>Търси символ</label><input type="text" name="char_6">
			
 			<label>Замени с</label><input type="text" name="char_8">

 			<input type="submit" name="submit" value="Изпрати">

 		</form>

	<?php code_str_b('Take a shot.'); ?>
	<?php code_str_b('Placeholders'); ?>
 </body>
 </html>