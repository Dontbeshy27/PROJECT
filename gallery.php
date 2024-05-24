<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="gallery.css">
</head>
<body>
    <section class="header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="list_users.php">Dashboard</a></li>
                    <li><a href="department.php">Department</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </div>
        </nav>
    </section>

    <input type="radio" name="photos" id="check1" checked>
    <input type="radio" name="photos" id="check2">
    <input type="radio" name="photos" id="check3">
    <input type="radio" name="photos" id="check4">

    <div class="container">

        <div class="photo-gallery">

            <?php
            $categories = array(
                "BUILDING" => array(
                    "building1.jpg", "building2.jpg", "building3.jpg", "building4.jpg"
                ),
                "COMPANY" => array(
                    "company1.jpg", "company2.jpg", "company3.jpg"
                )
            );

            foreach ($categories as $category => $images) {
                foreach ($images as $image) {
                    echo '<div class="pic ' . $category . '">';
                    echo '<img src="Img/' . $image . '">';
                    echo '</div>';
                }
            }
            ?>

        </div> 
    </div> 
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Employee Management System. All rights reserved.</p>
        <p><a>Privacy Policy</a> | <a>Terms of Service</a></p>
    </footer>
</body>
</html>
