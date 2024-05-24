<?php
require_once "includes/db.inc.php";
require_once "includes/util.php";

if (isset($_POST['create'])) {

    require_once "includes/db.inc.php";
    require_once "includes/util.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
 
     $username = validate($_POST['user_name']);
     $password = validate($_POST['password']);

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];   

    $sql = "SELECT * FROM user WHERE user_name = ?";
    $stmt = $con->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $mysqli->error);
    }

    $stmt->bind_param("s", $user_name); 
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect User name or password");
                exit();
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login User</title>
</head>
<body>
<h1>Login</h1>
    <form method="post">
        <p>
            <label>User Name</label>
            <input type="text" name="user_name">
        </p>
        <p>
            <label>Password</label>
            <input type="password" name="password">
        </p>
        <button type="submit" name="create">Login</button>
        <button type="submit" name="cancel">Cancel</button>
    </form>
</body>
</html>
