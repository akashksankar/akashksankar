<?php
// Handle form submission
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username  = $_POST['username'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $confirm   = $_POST['confirm_password'];

    $errors = [];

    if (empty($username)) $errors[] = "Username is required";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email required";
    if ($password !== $confirm) $errors[] = "Passwords do not match";

    if (empty($errors)) {
        $submitted = true;  // mark success
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>User Registration</h2>

<?php if (!$submitted): ?>
    <!-- Show form if not submitted -->
    <?php
    if (!empty($errors)) {
        echo "<ul style='color:red;'>";
        foreach ($errors as $e) {
            echo "<li>$e</li>";
        }
        echo "</ul>";
    }
    ?>

    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <label>Confirm Password:</label><br>
        <input type="password" name="confirm_password"><br><br>

        <button type="submit">Register</button>
    </form>

<?php else: ?>
    <!-- OUTPUT AFTER SUBMISSION -->
    <h3>Registration Successful!</h3>

    <p><strong>Username:</strong> <?= htmlspecialchars($username) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>

    <!-- Security best practice: do NOT display passwords -->
    <p><strong>Password:</strong> Saved securely (not shown)</p>

<?php endif; ?>

</body>
</html>

