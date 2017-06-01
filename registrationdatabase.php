<?php 
		$mysqli = mysqli_connect('localhost', 'root', '', 'labben');
		$salt = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
		$user=mysqli_real_escape_string($mysqli, $_POST["user"]);
		$mail=mysqli_real_escape_string($mysqli, $_POST["mail"]);
		$password=mysqli_real_escape_string($mysqli,$_POST["password"]);
		$hash=crypt($password,$salt);

		$_sql=mysqli_query($mysqli, "SELECT user, epost FROM comments WHERE epost='$mail'");

	if (mysqli_num_rows($_sql)>=1)
	{
		echo "Epost finns redan!";
	}
	else if(!preg_match('/[0-9]/', $password)){
		echo "Lösenordet är inte starkt nog.";
	}

	else 
{
		$sql=mysqli_query($mysqli, "INSERT INTO users (user, epost, password, salt)
		VALUES ('$user', '$mail', '$hash', '$salt')");
		header("Location: index.php");
	}
?>
