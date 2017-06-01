<!DOCTYPE html>
<html>
	<head>
		<?php include "include/boothstrap.php";

		?>
	</head>
	<body>
		<?php session_start();
			if (isset($_SESSION['user'])) {
				echo '<a href="loggaut.php"> Logga ut </a>';
				echo "<p>Välkommen". " ". $_SESSION['user']."<p/>";
	
			}
			else{
				echo '<a href="login.php"> Logga in
					</a>
					<br/><a href="registration.php"> Registrering
					</a>';
			}

		?>

		<br/><a href="Info.php"> Info
		</a>
		<br/><a href="comments.php"> Comments
		</a>
		<div id="loggin">
		</div>

		<script type="text/javascript">
 
		</script>
	</body>
</html>
