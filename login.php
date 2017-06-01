<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<a href="index.php"> Back </a>
		<div id="form">
		</div>
		<form action="loggindatabase.php" method="POST">
			<input name="user" type="text" placeholder="Användarnamn">
			<br/><input name="pass" type="password" placeholder="Lösenord">
			<br/><input type="submit" value="Loggin" id="btn">
		</form>
	</head>
</html>

