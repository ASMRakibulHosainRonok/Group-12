<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer HomePage</title>
    <link rel="stylesheet" href="f_homePagestyle.css">
</head>
  <body background="15.jpeg">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" style="display: block; margin-left: 500px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 50px;">Farmer HomePage</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
        <div class ="btn-group">
          <button><a href="F_landSize.php">Land Size</a></button>
          <button><a href="F_history.php">History</a></button>
          <button><a href="Profit.php">Profit</a></button>
          <button><a href="exp_info.php">Feedback from Agricultural Expert</a></button>
        </div>      
</body>
</html>
