<html>
	<form action="lesson10_post.php" , method="post">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit">
	</form>
	<?php
		$user = $_POST["username"] ?? "";
		$pwd = $_POST["password"] ?? "";

		if ($user == "rakka" and $pwd == "rakka") {
			echo "You are loged in"; 
		}
	?>

</html>