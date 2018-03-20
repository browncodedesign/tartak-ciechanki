

<!DOCTYPE html>
<html langng="pl"
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<title>Tartak ciechanki</title>
			<!---STYLE-->
				<link rel="stylesheet" href+"normalize.css">
				<link rel="stylesheet" href="style.css">
				<link href="https://fonts.googleapis.com/css?family=Khand|Orbitron" rel="stylesheet">
		</head>	
	<body>
		<header class="header echo" style="min-height: 90vh;">
				<h1>Tartak ciechanki</h1>
			<!--- PHP SCRIPT --->
				<?php
				$to      = 'drewno.leczna@wp.pl';
				$name    = $_POST['name'];
				$email   = $_POST['email'];
				$phone   = $_POST['phone'];
				
				$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')' . '(' . $phone . ')';

				$message = $_POST['message'];
				$headers = 'From: ' . $name . ' (' . $email . ') ' . ' (' . $phone .  ')';
				$headers .= 'Content-Type: Tartak-ciechanki.pl; charset=utf-8';
				mail($to, $subject, $message, $headers);
			?>
			<!--- PHP SCRIPT  ENDS--->
		<p>Wiadomość wysłana pomyślnie</p>
			<br><br>
			<div>
				<ul class="nav" style="width: 300px; margin: auto" >
				<li><a href="index.html">Powrót do strony głównej</a></li>
				<ul>
			</div>	
			</div>
	</header>
		<footer class="footer">
			<hr>
			<p>&copy; 2018 by Alan Mazurek   | All rights reserved</p>
		</body>
	</html>