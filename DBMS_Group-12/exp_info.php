<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection


// SQL query to retrieve data
$sql = "SELECT * FROM agricultural_experts_form";
$result = $conn->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Output data in table format
    echo "<html><head><title>Agricultural Experts Form Data</title></head><body>";
    echo "<h2>Agricultural Experts Form Data</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Next Crop</th><th>Fertilizer</th><th>Chemical</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["next_crop"] . "</td><td>" . $row["fertilizer"] . "</td><td>" . $row["chemical"] . "</td></tr>";
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