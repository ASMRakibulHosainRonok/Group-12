<?php
// Establish a connection to the database
include 'Connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $aphone_number = $_POST["aphone_number"];
    $email_address = $_POST["email_address"];
    $degrees = $_POST["degrees"];
    $Areas_of_expertise = $_POST["Areas_of_expertise"];
    $Previous_work_experience_in_agriculture = $_POST["Previous_work_experience_in_agriculture"];
    $Current_job_title = $_POST["Current_job_title"];

    // Insert data into the 'market_rep' table
    $query = "INSERT INTO agricultural_experts (password, first_name, last_name, aphone_number, email_address, degrees, Areas_of_expertise, Previous_work_experience_in_agriculture, Current_job_title )
              VALUES ('$password', '$first_name', '$last_name', ' $aphone_number', '$email_address', '$degrees', ' $Areas_of_expertise', ' $Previous_work_experience_in_agriculture', '$Current_job_title')";

    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>

<!-- register_option1.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Agricultural Experts</title>
  <style>
    /* CSS styles */
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
    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }
    .input-group label {
      display: block;
      margin-bottom: 5px;
    }
    .input-group input {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    .button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Registration Agricultural Experts</h2>
    <form method="post">
    <div class="input-group">
      <label for="password">Password</label>
      <input type="text" id="password" name="password">
    </div>
    <div class="input-group">
      <label for="first_name">First Namelabel>
      <input type="text" id="first_name" name="first_name">
    </div>
    <div class="input-group">
      <label for="last_name">Last Name</label>
      <input type="text" id="last_name" name="last_name">
    </div>
    <div class="input-group">
      <label for="aphone_number">Phone Number</label>
      <input type="text" id="aphone_number" name="aphone_number">
    </div>
    <div class="input-group">
      <label for="email_address">Email Address</label>
      <input type="text" id="email_address" name="email_address">
    </div>
    <div class="input-group">
      <label for="degrees">Degrees</label>
      <input type="text" id="degrees" name="degrees">
    </div>
    <div class="input-group">
      <label for="Areas_of_expertise">Areas of expertise</label>
      <input type="text" id="Areas_of_expertise" name="Areas_of_expertise">
    </div>
    <div class="input-group">
      <label for="Previous_work_experience_in_agriculture">Previous work Experience in Agriculture</label>
      <input type="text" id="Previous_work_experience_in_agriculture" name="Previous_work_experience_in_agriculture">
      
      <div class="input-group">
      <label for="Current_job_title">Current Job Title</label>
      <input type="text" id="Current_job_title" name="Current_job_title">
    </div>
    </div>
    <button class="button" onclick="register()">Register</button>
  </div>
  
</body>
</html>
