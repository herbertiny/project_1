<?php
include "database.php";
//$courseCode  = $_GET["courseCode"];
$sql = "DELETE FROM `courses` WHERE courseCode  = $courseCode ";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: indexx.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
