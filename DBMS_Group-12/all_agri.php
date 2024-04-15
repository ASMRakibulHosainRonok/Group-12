<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection


// SQL query to retrieve data
$sql = "SELECT * FROM agricultural_experts";
$result = $conn->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Output data in table format
    echo "<html><head><title>All Agricultural Experts</title></head><body>";
    echo "<h2>All Agricultural Experts</h2>";
    echo "<table border='1'>";
    echo "<tr><th>password</th><th>first_name</th><th>last_name</th><th>aphone_number </th><th>email_address</th><th>degrees</th><th>Areas_of_expertise</th><th>Previous_work_experience_in_agriculture</th><th>Current_job_title</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["password"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["aphone_number"] . "</td><td>" . $row["email_address"] . "</td><td>" . $row["degrees"] . "</td><td>" . $row["Areas_of_expertise"] . "</td><td>" . $row["Previous_work_experience_in_agriculture"] . "</td><td>" . $row["Current_job_title"] . "</td></tr>";
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
<form action="delete_agri.php" method="post">
    <div style="text-align:center;">
        <label for="aphone_number">Enter Agricultural Expert's Phone Number to Delete:</label>
        <input type="varchar" id="aphone_number" name="aphone_number" required>
        <button type="submit">Delete</button>
    </div>
</form>



</body>
</html>