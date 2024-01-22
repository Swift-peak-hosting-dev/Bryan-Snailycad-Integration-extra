<?php
include 'license_verification.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $licenseKey = $_POST['license_key'];

    if (validateLicenseKey($username, $licenseKey, $conn)) {
        // Valid license key, allow access to the application
        echo "Access granted!";
        // Add your application logic here
    } else {
        // Invalid license key, deny access
        echo "Invalid license key. Access denied.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #1f1f1f; /* Set your desired dark background color */
            color: #fff; /* Set text color to white or a contrasting color */
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #fff;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #333; /* Adjust form background color */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #555;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #4caf50; /* Highlight color on focus */
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 12px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="license_key">License Key:</label>
        <input type="text" name="license_key" required>

        <input type="submit" value="Login">
    </form>
</body>
</html>
