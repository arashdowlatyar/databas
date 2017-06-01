<!DOCTYPE html>
<html>
	<head>
		<?php 
			include "include/boothstrap.php";
			session_start();
		if (isset($_SESSION["user"])){
	
		}
		else {
			header("Location: login.php");
		}
		?>
		<a href="loggaut.php"> Logga ut</a>
			<div id="form">
		<form method="POST" action="database.php" name="newForm"> 
			<br/><label> Kommentar </label> <br/> <textarea name="comment"> </textarea>
			</br><input type="submit" value="Skicka" id="btn">
			</div>
			<div id="comments">
		<?php include ("selectdatabase.php");
		?>
			</div>

		</form>
			</div>
	</head>
</html>
