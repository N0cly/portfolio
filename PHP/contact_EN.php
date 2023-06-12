<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = 'From:'.$name."<".$email.">\r\n";

$recipient = 'enzo.bedos.13@gmail.com';

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="../asset/img/svg/box.svg">

		<!--=============== UNICONS ===============-->
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
		
		<!--=============== CSS ===============-->
		<link rel="stylesheet" href="../CSS/main.css">
		<title>Enzo</title>
	</head>
	<body>
		<!--=============== HEADER ===============-->
		<header class="header" id="header">
			<nav class="nav container">
				<a href="#" class="nav__logo">Enzo</a>

				<div class="nav__btns">
					<!--Theme change button-->
					<i class="uil uil-moon change-theme" id="theme-button"></i>
				</div>
			</nav>
		</header>

		<div class="container">
			<div class="section">
				<h1>Thank you for your request !</h1>
				<h2>I will contact you as soon as possible :)</h2>
				<span class="section_subtitle">Click on my name for back to home page</span>
			</div>
		</div>
		<!--=============== SWIPER JS ===============-->
		<script src="../JS/swiper-bundle.min.js"></script>

		<!--=============== MAIN JS ===============-->
		<script src="../JS/app.js"></script>
	</body>
</html>

';

?>