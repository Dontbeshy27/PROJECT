<?php
require_once "includes/util.php";
session_start();
validate_login();


if (isset($_POST['create'])) {

    require_once "database/db.include.php";

    $position= $_POST['position'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['user_name'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $salary = $_POST['salary'];

    $sql = "INSERT INTO user (position, first_name, last_name, user_name, email, password, salary) VALUES(?,?,?,?,?,?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssss", $position, $first_name, $last_name, $username, $email, $password, $salary);

    if ($stmt->execute()) {
        $user_id = $con->insert_id;

        redirect("list_users.php?user_id=$user_id");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="create.css">
</head>

<body>
    <h1>Create User</h1>
    <form method="post">
    <p>
            <label>Position</label>
            <input type="text" name="position" required>
        </p>
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" required>
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" required>
        </p>
        <p>
            <label>Email</label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>User Name</label>
            <input type="text" name="user_name" required>
        </p>
        <p>
            <label>Password</label>
            <input type="password" name="password" required>
        </p>
        <p>
            <label>Salary</label>
            <input type="salary" name="salary" required>
        </p>

        <button type="submit" name="create">Create</button>
    </form>
    <a href="list_users.php">
        <button>Cancel</button>
    </a>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Employee Management System. All rights reserved.</p>
        <p><a href="privacy_policy.php">Privacy Policy</a> | <a href="terms_of_service.php">Terms of Service</a></p>
    </footer>
</body>

</html>