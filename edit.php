<?php

  include '';

  $txt = $_POST['txt'];

  $sql = "INSERT INTO jg (txt) VALUES ('$txt')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
