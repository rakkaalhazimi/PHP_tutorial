<html>
	<form action="lesson07_getting_user_input.php" , method="get">
		Name: <input type="text" name="name">
		<input type="submit">
	</form>

	<?php
	echo $_GET["name"] ?? ""; // isset operator
	// echo "<br>";
	// echo isset($_GET["name"]) ? $_GET["name"]: ""; // equivalent
	?>

</html>