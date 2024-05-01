<?php
  include 'config.php';

  $sql = "SELECT * FROM jg";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
?>

Task <span><?php echo $count; ?></span>