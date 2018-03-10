

<!DOCTYPE html>
<html lng="pl"
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		

			<title>Tartak ciechanki</title>
				<link rel="stylesheet" href+"normalize.css">
				<link rel="stylesheet" href="style.css">
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic&amp;subset=latin-ext">
				
		<head>	
	<body>
		<header class="header" style="min-height: 90vh;">
				<h1>Tartak ciechanki</h1>
				
				<?php
				$to      = 'amazurek92@gmail.com';
				$name    = $_POST['name'];
				$email   = $_POST['email'];
				$phone   = $_POST['phone'];
				
				$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')' . '(' . $phone . ')';

				$message = $_POST['message'];
				$headers = 'From: ' . $name . ' (' . $email . ') ' . ' (' . $phone .  ')';
				$headers .= 'Content-Type: Tartak-ciechanki.pl; charset=utf-8';
				mail($to, $subject, $message, $headers);
				
				
				echo '<h2>Wiadomość wysłana</h1>'
			?>
			<br>
			<div>
				<ul class="nav" style="width: 300px; margin: auto" >
				<li><a href="index.html">Powrót do strony głównej</a></li>
				<ul>
			</div>	
			</div>
	</header>
		<footer class="footer">
			<hr>
			<p>&copy; Alan 2019</p>
		</footer>
		</body>
	</html>