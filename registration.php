<!DOCTYPE html>
<html>
	<head>
		<?php
			include "include/boothstrap.php";
		?>
		<meta charset=utf-8>

	</head>
	<body>
		<a href="index.php"> Back </a>
		<div id="form">
		<form method="POST" action="registrationdatabase.php" name="logginform">
			<label> Användarnamn </label><br/><input name="user" type="text" placeholder="Användarnamn">
			<br/><label> Mailadress </label></br><input name="mail" type="text" placeholder="Mailadress">
			<br/><label> Lösenord </label><br/><input name="password" type="password" placeholder="Lösenord">
			<br/><input type="submit" value="Register">
		</form>
		</div>
	</body>
	</head>
</html>
