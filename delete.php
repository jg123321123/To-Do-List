<?php

  include 'config.php';

  $id = $_POST['id'];

  $sql = "DELETE FROM jg WHERE id='$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
