<?php
include "dbconfig.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `requests` WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: recipient-requests.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
}

?>