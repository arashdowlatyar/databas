<?php
	session_start();
		$mysqli = mysqli_connect('localhost', 'root', '', 'comments');
		$error = $mysqli->connect_error;
	if ($error) 
	{
		$code = mysqli_connect_errno;
		die("Error: ($code) $error");
	}
		$get_data=mysqli_query($mysqli, "SELECT user, epost FROM users WHERE epost='".$_SESSION['user']."'");
	while ($row=mysqli_fetch_array($get_data)) {
			$name = $row[0];
			$mail = $row[1];
	}
		$comment=mysql_real_escape_string($_POST["comment"]);
		$query=mysqli_query($mysqli,"INSERT INTO comments (name, mail, com)
		VALUES ('$name', '$mail', '$comment')");
		header("Location: comments.php");
?> 
