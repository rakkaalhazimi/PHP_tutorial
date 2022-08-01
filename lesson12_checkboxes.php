<html>
	<form action="lesson12_checkboxes.php" , method="get">
		Apples: <input type="checkbox" name="fruits[]" value="apple"><br>
		Blue Berry: <input type="checkbox" name="fruits[]" value="blue berry"><br>
		Cherry: <input type="checkbox" name="fruits[]" value="cherry"><br>
		<input type="submit">
	</form>

	<?php
		$fruits = $_GET["fruits"] ?? array();
    foreach ($fruits as $fruit) {
      echo "You like $fruit <br>"; 
    }
	?>

</html>