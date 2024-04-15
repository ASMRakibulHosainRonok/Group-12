<?php
// Establish a connection to the database
include 'Connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $land_size = $_POST["land_size"];
    $land_unit = $_POST["land_unit"];
    $last_2years_crop_name = $_POST["last_2years_crop_name"];
    $fertilizer = $_POST["fertilizer"];
    $cheamical = $_POST["cheamical"];
    $soil_structure = $_POST["soil_structure"];
    $Environmental_Conditions = $_POST["Environmental_Conditions"];
    $fphone_number= $_POST["fphone_number"];

    // Insert data into the 'market_rep' table
    $query = "INSERT INTO farmer_form (land_size, land_unit,last_2years_crop_name, fertilizer, cheamical, soil_structure, Environmental_Conditions, fphone_number)
              VALUES ('$land_size', '$land_unit', '$last_2years_crop_name', '$fertilizer', '$cheamical', '$soil_structure', '$Environmental_Conditions', '$fphone_number')";

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
  <title>History of Farming</title>
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      font-size: medium;
      font-weight: bolder;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('10.jpg'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    }
    .card {
      background-color: transparent;
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
    <h2>History of Farming</h2>
    <form method="post">
    <div class="input-group">
      <label for="land_size">land_size</label>
   
      <input type="text" id="land_size" name="land_size" required>
    </div>
    <div class="input-group">
      <label for="land_unit">land_unit</label>
      <input type="text" id="land_unit" name="land_unit"required>
    </div>
    <div class="input-group">
      <label for="last_2years_crop_name"> last_2years_crop_name</label>
      <input type="text" id="last_2years_crop_name" name="last_2years_crop_name" required>
    </div>
    <div class="input-group">
      <label for="fertilizer">fertilizer</label>
      <input type="varchar" id="fertilizer" name="fertilizer" required>
    </div>
    <div class="input-group">
      <label for="cheamical">cheamical</label>
      <input type="text" id="cheamical" name="cheamical" required>
    </div>
    <div class="input-group">
      <label for="soil_structure">soil_structure</label>
      <input type="text" id="soil_structure" name="soil_structure" required>
    </div>
    <div class="input-group">
      <label for="Environmental_Conditions">Environmental_Conditions</label>
      <input type="text" id="Environmental_Conditions" name="Environmental_Conditions" required>
    </div>
    <div class="input-group">
      <label for="fphone_number">fphone_number</label>
      <input type="text" id="fphone_number" name="fphone_number" required>
    </div>
    <button class="button" type="submit"> Submit </button >
    </form>
  </div>

</body>
</html>
