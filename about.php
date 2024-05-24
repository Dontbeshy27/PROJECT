<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="about.css">
</head>
<body>
	<header>
		<div class="header">
			<h1>About Us</h1>
			<p>Introducing our Employee Management System: Streamlining HR tasks for efficiency.<br> With our intuitive platform, you can effortlessly manage attendance, leave, and performance, all in one place.<br> Join us and revolutionize your HR workflow today.</p>

			<div class="link">
				<a href="list_users.php">Dashboard</a>
				<a href="index.php">Home</a>
				<a href="department.php">Department</a>
				<a href="about.php">About Us</a>
			</div>
			<div id="account">
				<span class="align-right"><a href="logout.php">Log out</a></span>
			</div>
		</div>
	</header>
	<div class="image">
		<div class="image-container">
			<img src="img/Edward.jpg" alt="Edward">
			<p>Edward M Pacheco Jr</p>
		</div>
		<div class="image-container">
			<img src="img/Justin.jpg" alt="Justin">
			<p>Justin Aranas</p>
		</div>
		<div class="image-container">
			<img src="img/Inelyn.jpg" alt="Inelyn">
			<p>Inelyn Palomar</p>
		</div>
		<div class="image-container">
			<img src="img/Trudy.jpg" alt="Trudy">
			<p>Trudy Iglesias</p>
		</div>
		<div class="image-container">
			<img src="img/Joshua.jpg" alt="Joshua">
			<p>Joshua De Guia</p>
		</div>
	</div>
	<footer>
        <p>&copy; <?php echo date("Y"); ?> Employee Management System. All rights reserved.</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>
</body>
</html>
