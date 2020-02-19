<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Task 3 Изчислете вашето егн по въведени 9 цифри</title>
</head>
<body>
	<form method="post" action="">
            <h2>Въведете първите 9 цифри от ЕГН</h2>
            <p>
            	<label>1 </label><input  type="number" name="num1" value="" />
            </p>
            <p>
            	<label>2 </label><input type="number" name="num2" value="" />
            </p>
            <p>
            	<label>3 </label><input type="number" name="num3" value="" />
            <p>
            <p>
            	<label>4 </label><input type="number" name="num4" value="" />
            </p>
            <p>
            	<label>5 </label><input type="number" name="num5" value="" />
            </p>
            <p>
            	<label>6 </label><input type="number" name="num6" value="" />
            </p>
            <p>
           		<label>7 </label><input type="number" name="num7" value="" />
            </p>
            <p>
            	 <label>8 </label><input type="number" name="num8" value="" />
            </p>
            <p>
            <label>9 </label><input type="number" name="num9" value="" />
            </p>
            <input type="submit" name="submit" value="Изчисли">
    </form>
<?php
 if (isset($_POST['submit'])) {
 	$egn_1 = $_POST['num1'];
    $egn_2 = $_POST['num2'];
    $egn_3 = $_POST['num3'];
    $egn_4 = $_POST['num4'];
    $egn_5 = $_POST['num5'];
    $egn_6 = $_POST['num6'];
    $egn_7 = $_POST['num7'];
    $egn_8 = $_POST['num8'];
    $egn_9 = $_POST['num9'];
 
$egn = ($egn_1 * 2) + ($egn_2 * 4) + ($egn_3 * 8) + ($egn_4 * 5) + ($egn_5 * 10) + ($egn_6 * 9) + ($egn_7 * 7) + ($egn_8 * 3) + ($egn_9 * 6);
            echo "<p>Контролната цифра е </p>" . $control_number = $egn % 11;
     if ($control_number < 10) {
                echo "<p>Следователно Вашият ЕГН е </p>";
                echo $egn_1;
                echo $egn_2;
                echo $egn_3;
                echo $egn_4;
                echo $egn_5;
                echo $egn_6;
                echo $egn_7;
                echo $egn_8;
                echo $egn_9;
                echo round($control_number);
  }else {
                $control_number = 0;
                echo "<p>Следователно Вашият ЕГН е </p>";
                echo $egn_1;
                echo $egn_2;
                echo $egn_3;
                echo $egn_4;
                echo $egn_5;
                echo $egn_6;
                echo $egn_7;
                echo $egn_8;
                echo $egn_9;
                echo $control_number;
            }
        }
?>

</body>
</html>

