<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      padding: 20px;
      width: 300px;
      text-align: center;
    }
    .button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Login or Register</h2>
    <button class="button" onclick="window.location.href='login.php'">Login</button>
    <button class="button" onclick="window.location.href='register.php'">Register</button>
  </div>
</body>
</html>