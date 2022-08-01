<html>
	<form action="lesson09_build_mad_libs.php" , method="get">
		Color: <input type="text" name="color">
		<br>
		Noun: <input type="text" name="noun">
		<br>
		Food: <input type="text" name="food">
		<br>
		<input type="submit">
	</form>
	<?php
		$color = $_GET["color"] ?? "red";
		$noun = $_GET["noun"] ?? "ball";
		$food = $_GET["food"] ?? "cheese";

		echo "I like $color color. <br>"; 
		echo "My $noun is also $color. <br>";
		echo "I also like $color colored $food <br>";
	?>

</html>