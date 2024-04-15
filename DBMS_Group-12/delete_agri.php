<?php
include 'Connection.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aphone_numberToDelete = $_POST["aphone_number"];

    // Check if the provided aphone_number exists in the agricultural_experts table
    $checkQuery = "SELECT * FROM agricultural_experts WHERE aphone_number = '$aphone_numberToDelete'";
    echo "SQL Query: $checkQuery<br>"; // Output the SQL query for debugging

    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // If the agricultural expert exists, proceed with deletion
        $deleteQuery = "DELETE FROM agricultural_experts WHERE aphone_number = '$aphone_numberToDelete'";

        if ($conn->query($deleteQuery) === TRUE) {
            echo "Record with aphone_number $aphone_numberToDelete deleted successfully.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // If agricultural expert with the given aphone_number does not exist
        echo "No record found with aphone_number $aphone_numberToDelete.";
    }
}


$conn->close(); // Close the database connection
?>
