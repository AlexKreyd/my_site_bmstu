<?php
  session_start();
  session_destroy();
  header('Location:theory.php');
  exit();
?>
