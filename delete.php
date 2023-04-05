<?php
include("config.php");

// Get id from URL
$id = $_GET['id'];

// Delete student ukitumia id
$result = mysqli_query($mysqli, "DELETE FROM studentsdata WHERE id=$id");

// After delete redirect to Home
header("Location:index.php");
?>

