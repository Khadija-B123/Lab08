<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'Khadija' && $password === '106237257') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.php?error=1');
    exit();
}
?>