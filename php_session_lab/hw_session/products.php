<?php 
include('header.php'); 
session_start();
	echo "<p>Hello dear ".$_SESSION['username']." Your sum is ".$_SESSION['sum']."</p>";										
?>
<div id="navbar" class="navbar-collapse collapse">
<form action="" method="post" class="navbar-form navbar-left" role="form">
		<ul>
			<li>
				<input type="checkbox" name="products[]" value="Монитор-200">Монитор 200 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]"  value="1">
			</li>
			<li>
				<input type="checkbox" name="products[]" value="Смартфон-500">Смартфон 500 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]" value="1">
			</li>
			<li>
				<input type="checkbox" name="products[]" value="Телевизор-750">Телевизор 750 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]"   value="1">
			</li>
			<li>
				<input type="checkbox" name="products[]" value="Уредба-400">Уредба 400 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]"  value="1">
			</li>
			<li>
				<input type="checkbox" name="products[]" value="Лаптоп-1200">Лаптоп 1200 лв
				<span>Изберете количество</span>
				<input type="number" name="quantity[]" value="1">
			</li>
			
				<input type="submit" value="ДОБАВИ В КОЛИЧКАТА" class="btn btn-success">
			
		</ul>

	</form>
</div>
	
<?php 
include('footer.php');
if (!empty($_POST)) {
			if (empty($_POST['products'])) {
				echo "Изберете продукти!";
			}
			if (empty($_POST['quantity'])) {
				echo "Изберете количество!";
			}
			elseif (!empty($_POST['products']) && !empty($_POST['quantity']) ) {		

		$_SESSION['products'] = $_POST['products'];
		$_SESSION['quantity'] = $_POST['quantity'];
		$_SESSION['quantity'] = array_filter( $_SESSION['quantity']);
		
		$_quantity = implode("-", $_SESSION['quantity']);
		$_SESSION['quantity']= explode("-", $_quantity);
		header('Location:cart.php');
}

 }
 ?>