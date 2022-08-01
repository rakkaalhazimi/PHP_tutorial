<html>
	
<form action="lesson08_build_basic_calculator.php" , method="get">
		First Number: <input type="number" name="num1">
		<br>
		Second Number: <input type="number" name="num2">
		<input type="submit" value="Add">
	</form>

	<?php
		$num1 = $_GET["num1"] ?? 0;
		$num2 = $_GET["num2"] ?? 0;
	?>

	Result: <?php echo $num1 + $num2;?>

</html>