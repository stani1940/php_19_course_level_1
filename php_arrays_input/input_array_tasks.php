 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<?php 
 $user_info = [ "first_name"=>"Peter",
  				"surname"=>"Goranov", 
  				"family_name"=>"Hristov", 
  				"age"=>35,
  		 		"proffecy" =>"shloser",
  		 	];
 
 $user_dialer =  [ "first_name"=>"Peter",
  					"surname"=>"Goranov", 
  					"family_name"=>"Hristov", 
  					"number"=>622010,
  		 			"GSM" =>45847422,
  		 		];
$city_code =  		[ "Vratsa"=>3000,
  					"Tyrgovishte"=>7700, 
  					"Shumen"=>8000, 
  					"Sofia"=>1000,
  		 			"Burgas" =>7000,
  		 		];
 ?>
 <ul>
 	<li><?php echo $user_info ["first_name"] ?> </li>
 	<li><?php echo $user_info ["surname"] ?> </li>
 	<li><?php echo $user_info ["family_name"] ?> </li>
 	<li><?php echo $user_info ["age"] ?> </li>
	<li><?php echo $user_info ["proffecy"] ?> </li>

 </ul>
 <ul>
 	<li><?php echo $user_dialer ["first_name"] ?> </li>
 	<li><?php echo $user_dialer ["surname"] ?> </li>
 	<li><?php echo $user_dialer ["number"] ?> </li>
 </ul>
<ul>
 	<li><?php echo $city_code ["Vratsa"] ?> </li>
 	<li><?php echo $city_code ["Shumen"] ?> </li>
 	<li><?php echo $city_code["Tyrgovishte"] ?> </li>
 	<li><?php echo $city_code["Sofia"] ?> </li>

 </ul>
  <ol>
 	<li><?php echo $user_info ["first_name"] ?> </li>
 	<li><?php echo $user_info ["surname"] ?> </li>
 	<li><?php echo $user_info ["family_name"] ?> </li>
 	<li><?php echo $user_info ["age"] ?> </li>
	<li><?php echo $user_info ["proffecy"] ?> </li>

 </ol>
 <ol>
 	<li><?php echo $user_dialer ["first_name"] ?> </li>
 	<li><?php echo $user_dialer ["surname"] ?> </li>
 	<li><?php echo $user_dialer ["number"] ?> </li>
 </ol>
<ol>
 	<li><?php echo $city_code ["Vratsa"] ?> </li>
 	<li><?php echo $city_code ["Shumen"] ?> </li>
 	<li><?php echo $city_code["Tyrgovishte"] ?> </li>
 </ol>
 <table style="border: solid  1px;">
 	<tr>
 		<td style="border: solid 1px"><?php echo $user_info ["first_name"] ?> </td>
 		<td><?php echo $user_info ["surname"] ?> </td>
 		<td><?php echo $user_info ["family_name"] ?> </td>
 		<td><?php echo $user_info ["age"] ?> </td>
		<td><?php echo $user_info ["proffecy"] ?> </td>
 	</tr>
 	<tr>
 		<td><?php echo $user_dialer ["first_name"] ?> </td>
 		<td><?php echo $user_dialer ["surname"] ?> </td>
 		<td><?php echo $user_dialer ["number"] ?> </td>
 	</tr>
 	<tr>
 		<td><?php echo $city_code ["Vratsa"] ?> </td>
 		<td><?php echo $city_code ["Shumen"] ?> </td>
 		<td><?php echo $city_code["Tyrgovishte"] ?> </td>
 		<td><?php echo $city_code["Sofia"] ?> </td>
		<td><?php echo $city_code["Burgas"] ?> </td>
 	</tr>
 	
 </table>
 <form method="get" action="file.php">
          
            <p>
            	<input  type="text" name="name" value="" />
            </p>
            <p>
            	<input type="text" name="city" value="" />
            </p>
            <p>
            </p>
			   <input type="submit" name="submit" value="submit">

        </form>

	

 
 </body>
 </html>

