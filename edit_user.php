<?php
require_once "database/db.include.php";
require_once "includes/util.php";

$user_id = $_GET['user_id'];

if (isset($_POST['update'])) {
    $position = validate($_POST['position']);
    $first_name = validate($_POST['first_name']);
    $last_name = validate($_POST['last_name']);
    $email = validate($_POST['email']);
    $username = validate($_POST['user_name']);
    $active = isset($_POST['active']) ? 1 : 0;
    $salary = validate($_POST['salary']);

    $sql = "UPDATE user SET position = ?, first_name = ?, last_name = ?, user_name = ?, email = ?, active = ?, salary = ? WHERE id = ?";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $con->error);
    }
    $stmt->bind_param("sssssisi", $position, $first_name, $last_name, $username, $email, $active, $salary, $user_id);

    if ($stmt->execute()) {
        redirect("view_user.php?user_id=$user_id");
    } else {
        echo "Error updating record: " . $stmt->error;
    }
} else if (isset($_POST['cancel'])) {
    redirect("view_user.php?user_id=$user_id");
} else {
    $sql = "SELECT * FROM user WHERE id = ?";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $con->error);
    }
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="edit.css">
    <title>Edit User</title>
</head>

<body>
    <h1>Edit User</h1>
    <form method="post">
        <p>
            <label>Position</label>
            <input type="text" name="position" value="<?php echo htmlspecialchars($user['position']); ?>" required>
        </p>
        <p>
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
        </p>
        <p>
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required>
        </p>
        <p>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </p>
        <p>
            <label>User Name</label>
            <input type="text" name="user_name" value="<?php echo htmlspecialchars($user['user_name']); ?>" required>
        </p>
        <p>
            <label>Active</label>
            <input type="checkbox" name="active" value="yes" <?php echo $user['active'] == 1 ? 'checked' : ''; ?>>
        </p>
        <p>
            <label>Password</label>
            <input type="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" required>
        </p>
        <p>
            <label>Salary</label>
            <input type="text" name="salary" value="<?php echo htmlspecialchars($user['salary']); ?>" required>
        </p>

        <button type="submit" name="update">Update</button>
        <button type="submit" name="cancel">Cancel</button>
    </form>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Employee Management System. All rights reserved.</p>
        <p><a href="privacy_policy.php">Privacy Policy</a> | <a href="terms_of_service.php">Terms of Service</a></p>
    </footer>
</body>

</html>
