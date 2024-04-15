<?php
include 'Connection.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fphone_numberToDelete = $_POST["fphone_number"];

    // Check if the provided fphone_number exists in the farmer table
    $checkQuery = "SELECT * FROM farmer WHERE fphone_number = '$fphone_numberToDelete'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // If the farmer exists, proceed with deletion
        $deleteQuery = "DELETE FROM farmer WHERE fphone_number = '$fphone_numberToDelete'";

        if ($conn->query($deleteQuery) === TRUE) {
            echo "Record with fphone_number $fphone_numberToDelete deleted successfully.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // If farmer with the given fphone_number does not exist
        echo "No record found with fphone_number $fphone_numberToDelete.";
    }
}

$conn->close(); // Close the database connection
?>
