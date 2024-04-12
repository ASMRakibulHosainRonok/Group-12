<?php
// Establish a connection to the database
include 'Connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $password = $_POST["password"];
    $fphone_number = $_POST["fphone_number"];
    $division = $_POST["division"];
    $district = $_POST["district"];
    $sub_district = $_POST["sub_district"];
    $village = $_POST["village"];

    // Insert data into the 'market_rep' table
    $query = "INSERT INTO farmer (first_name, last_name, password, fphone_number, division, district, sub_district, village)
              VALUES ('$first_name', '$last_name', '$password', '$fphone_number', '$division', '$district', '$sub_district', '$village')";

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
  <title>Registration Farmer</title>
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
    <h2>Registration Farmer</h2>
    <form method="post">
    <div class="input-group">
      <label for="first_name">First Name:</label>
   
      <input type="text" id="first_name" name="first_name" required>
    </div>
    <div class="input-group">
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name"required>
    </div>
    <div class="input-group">
      <label for="password"> Password:</label>
      <input type="int" id="password" name="password" required>
    </div>
    <div class="input-group">
      <label for="fphone_number">Phone Number:</label>
      <input type="varchar" id="fphone_number" name="fphone_number" required>
    </div>
    <div class="input-group">
      <label for="division">Division:</label>
      <input type="text" id="division" name="division" required>
    </div>
    <div class="input-group">
      <label for="district">District:</label>
      <input type="text" id="district" name="district" required>
    </div>
    <div class="input-group">
      <label for="sub_district">Sub District:</label>
      <input type="text" id="sub_district" name="sub_district" required>
    </div>
    <div class="input-group">
      <label for="village">Village:</label>
      <input type="text" id="village" name="village" required>
    </div>
    <button class="button" type="submit"> Register </button >
    </form>
  </div>

</body>
</html>
