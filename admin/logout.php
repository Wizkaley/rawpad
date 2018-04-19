<?php
  session_destroy();
  $_SESSION['logged_in'] = false;
  header('Location: admin.php');
 ?>
