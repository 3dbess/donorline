<?php
include "dbconfig.php";

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Update the user's status in the database
    $query = "UPDATE requests SET isSelected = '1' WHERE id = '$userId'";
    $result = mysqli_query($conn, $query);

    $query2 ="UPDATE requests SET isCompleted = '1' WHERE id= '$userId'";
    $result = mysqli_query($conn, $query2);

    if ($result) {
        header("Location: donor.php#appoint");
        exit();
    } else {
        echo "Failed.";
    }
}

// Close the database connection
mysqli_close($conn);
?>