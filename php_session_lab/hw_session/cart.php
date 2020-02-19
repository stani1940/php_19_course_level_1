<?php 
session_start();
include('header.php');
$count = count($_SESSION['products']);
		$products = $_SESSION['products'];
		$quantity = $_SESSION['quantity'];
		$sum_products = 0;
		$sum =  $_SESSION['sum'];
		echo "Вашата количка съдържа -"
 ?>
<ol>
<?php
	for ($i=0; $i < $count; $i++) { 
		$product_price[$i] = explode('-', $products[$i]);
				
		$product_total[$i] = $product_price[$i][1]*$quantity[$i];
		$sum_products = $sum_products + $product_total[$i];
		echo "<li>".$product_price[$i][0]." - ".$quantity[$i]." броя</li>";
	}
?>
</ol>
<p>На обща стойност	<?php echo $sum_products." лева";?></p>

<?php 
if ($sum >= $sum_products) {
		$result = $sum - $sum_products;
		 echo "<p>Остатъка вашата сума е  ". $result." лева"."</p>";
			echo "<a href='logout.php'>Излизане</a>";
		}
		else {
			echo "<p>Въведената от вас сума не е достатъчна за вашата покупка!"."</p>";
			
			echo "<a href='logout.php'>Излизане</a>";
		}

 ?>
		