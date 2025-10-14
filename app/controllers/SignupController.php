<?php
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT username FROM user WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user > 0) {
        echo "Username already exist";
        exit();
    } else {
        $stmt = $conn->prepare("INSERT INTO user (fname, lname, username, password) VALUES (:fname, :lname, :username, :password)");
        $stmt->execute([
        ':fname' => $fname,
        ':lname' => $lname,
        ':username' => $username,
        ':password' => $hashed_password
    ]);
    header ('location: /project/public/view/login.php');
    exit();
    } 
}
$conn = null;
?>