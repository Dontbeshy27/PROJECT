<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Details</title>
    <link rel="stylesheet" href="departments.css">
</head>
<body>
    <header>
        <div class="nav-container">
        <a href="list_users.php" class="nav-link">Dashboard</a>
        <a href="index.php" class="nav-link">Home</a>
        <a href="gallery.php" class="nav-link">Gallery</a>
        <a href="about.php" class="nav-link">About Us</a>
        <li><a href="logout.php">Log out</a></li>

        </div>
    </header>
    <div class="container">
        <h1>Company Departments</h1>
        <ul>
            <?php
            // Load departments from JSON file
            $json = file_get_contents('departments.json');
            $departments = json_decode($json, true);

            foreach ($departments as $department) {
                echo '<li><a href="department.php?id=' . $department['id'] . '">' . $department['name'] . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];


            $json = file_get_contents('departments.json');
            $departments = json_decode($json, true);

            foreach ($departments as $department) {
                if ($department['id'] == $id) {
                    echo '<h1>' . $department['name'] . '</h1>';
                    echo '<p>' . $department['description'] . '</p>';
                    echo '<h2>Contact</h2>';
                    echo '<p>Email: ' . $department['contact']['email'] . '</p>';
                    echo '<p>Phone: ' . $department['contact']['phone'] . '</p>';
                    break;
                }
            }
        } else {
            echo '<p>No department ID provided.</p>';
        }
        ?>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Employee Management System. All rights reserved.</p>
        <p><a>Privacy Policy</a> | <a>Terms of Service</a></p>
    </footer>
</body>
</html>
