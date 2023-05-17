<?php
include "dbconfig.php";

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Update the user's status in the database
    $query = "UPDATE requests SET status = 'approved' WHERE id = '$userId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin.php#users");
        exit();
    } else {
        echo "Failed to approve request.";
    }
}

// Close the database connection
mysqli_close($conn);
?>