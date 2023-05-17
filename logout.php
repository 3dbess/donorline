<?php
session_start();
$_SESSION['username'] = "";
header("Location: index.php");
ob_end_clean();
?>