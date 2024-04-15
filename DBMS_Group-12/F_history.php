<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection


// SQL query to retrieve data
$sql = "SELECT * FROM farmer_form";
$result = $conn->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Output data in table format
    echo "<html><head><title>Land History</title></head><body>";
    echo "<h2>Land History</h2>";
    echo "<table border='1'>";
    echo "<tr><th>land_size</th><th>land_unit</th><th>last_2years_crop_name</th><th>fertilizer</th><th>cheamical</th><th>Soil_Structure</th><th>Environmental_Conditions</th><th>fphone_number</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["land_size"] . "</td><td>" . $row["land_unit"] . "</td><td>" . $row["last_2years_crop_name"] . "</td><td>" . $row["fertilizer"] . "</td><td>" . $row["cheamical"] . "</td><td>" . $row["soil _structure"] . "</td><td>" . $row["Environmental_Conditions"] . "</td><td>" . $row["fphone_number"] . "</td></tr>";
    }

    echo "</table>";
    echo "</body></html>";
} else {
    echo "No data found";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer History Page</title>
    <link rel="stylesheet" href="F_history.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }
    th {
        background-color: #007bff;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>


</style>
</html>