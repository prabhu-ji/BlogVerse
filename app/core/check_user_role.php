<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
function checkAdminAccess($redirectUrl) {
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        echo '<script>
            alert("You are unauthorized to access this page.");
            window.location.href = "' . htmlspecialchars($redirectUrl) . '"; // Escape URL for security
        </script>';
        exit(); 
    }
}
