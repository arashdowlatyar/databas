<?php
		$mysqli = mysqli_connect('localhost', 'root', '', 'labben');
		$error = $mysqli->connect_error;
		$sql=mysqli_query($mysqli, "SELECT name, mail, com FROM comments");
	while($rows=mysqli_fetch_assoc($sql)){
		$comments=$rows['com'];
		$name=$rows['name'];
		$mail=$rows['mail'];
	echo $mail."," ."<br/><br/>".$comments ."<br/> <hr/>";
	}
?>
