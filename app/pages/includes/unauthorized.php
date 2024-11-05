<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .alert {
            width: 400px; /* Adjust width as needed */
            text-align: center;
        }
    </style>
</head>
<body>

<div class="alert alert-danger">
    <h4 class="alert-heading">Unauthorized Access!</h4>
    <p>You do not have permission to view this page.</p>
    <hr>
    <p class="mb-0">Please contact the administrator if you believe this is a mistake.</p>
    <a href="index.php" class="btn btn-primary mt-3">Go to Home</a> <!-- Adjust the link as necessary -->
</div>

</body>
</html>
