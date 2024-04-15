<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection


// SQL query to retrieve data
$sql = "SELECT * FROM farmer";
$result = $conn->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Output data in table format
    echo "<html><head><title>All Farmer</title></head><body>";
    echo "<h2>All Farmer</h2>";
    echo "<table border='1'>";
    echo "<tr><th>first_name</th><th>last_name</th><th>password</th><th>fphone_number </th><th>division</th><th>district</th><th>sub_district</th><th>village</th><th>auser_id</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["password"] . "</td><td>" . $row["fphone_number"] . "</td><td>" . $row["division"] . "</td><td>" . $row["district"] . "</td><td>" . $row["sub_district"] . "</td><td>" . $row["village"] . "</td><td>" . $row["auser_id"] . "</td></tr>";
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


<body>
    
<!-- DELETION FORM -->
<form action="delete_f.php" method="post">
    <div style="text-align:center;">
        <label for="fphone_number">Enter Farmer's Phone Number to Delete:</label>
        <input type="text" id="fphone_number" name="fphone_number" required>
        <button type="submit">Delete</button>
    </div>
</form>


</body>
</html>