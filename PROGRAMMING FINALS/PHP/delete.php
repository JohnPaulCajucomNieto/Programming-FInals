<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `customerorders` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=DELETED SUCCESFULLY!");
} else {
  echo "Failed: " . mysqli_error($conn);
}