<?php
include "dbconfig.php";

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Update the user's status in the database
    $query = "UPDATE users SET isDeleted = '1' WHERE id = '$userId'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin.php#users");
        exit();
    } else {
        echo "Failed to delete user.";
    }
}

// Close the database connection
mysqli_close($conn);
?>