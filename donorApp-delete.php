<?php
include "dbconfig.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `appointments` WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: donor-appointments.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
}

?>