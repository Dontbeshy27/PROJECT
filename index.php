<?php

session_start();

$_SESSION["user_id"] = 1052;

if (isset($_SESSION["user_id"])) {

    require_once("includes/db.inc.php");

    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $con->query($sql);

    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <header>
        <div class="header-content">
            <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
            <div class="link">
                <h2>CC106 PROJECT</h2>
                <nav>
                    <a href="list_users.php">Dashboard</a>
                    <a href="department.php">Department</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="about.php">About Us</a>
                    <div id="account">
                        <span class="align-right"><a href="logout.php">Log out</a></span>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="image">
        <img src="img/img01.jpg" alt="image">
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Employee Management System. All rights reserved.</p>
        <p><a>Privacy Policy</a> | <a>Terms of Service</a></p>
    </footer>
</body>

</html>
