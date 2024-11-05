<?php
// auth.php
session_start();

if (!isset($_SESSION['user'])) {
    // No user is logged in, redirect to login page
    header("Location: http://localhost/blog/public/login");
    exit();
}

$role = $_SESSION['user']['role'];

if ($role === 'admin') {
    header("Location: http://localhost/blog/public/admin");
} elseif ($role === 'user') {
    header("Location: http://localhost/blog/public/");
} else {
    echo "<script>alert('Unknown role or unauthorized access.');</script>";
    header("Location: http://localhost/blog/public/");
}
exit();
