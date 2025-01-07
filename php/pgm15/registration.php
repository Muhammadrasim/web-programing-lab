<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);

$errors = [];

if (empty($username)) {
$errors[] = "Username is required.";
} elseif (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $username)) {
$errors[] = "Username must be 3-20 characters and can only contain
letters, numbers, and underscores.";
}

if (empty($email)) {
$errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$errors[] = "Invalid email format.";
}

if (empty($password)) {

$errors[] = "Password is required.";
} elseif (strlen($password) < 6) {
$errors[] = "Password must be at least 6 characters long.";
}
if ($password !== $confirm_password) {
$errors[] = "Passwords do not match.";
}
if (!empty($errors)) {
echo "<h3>Errors:</h3>";
echo "<ul>";
foreach ($errors as $error) {
echo "<li>$error</li>";
}
echo "</ul>";
} else {
echo "<h3>Registration Successful!</h3>";
echo "<p>Welcome, $username!</p>";
}}
?>
