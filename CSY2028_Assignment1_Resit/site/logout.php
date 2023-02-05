<?php
require 'includes/startSessions.php';
  unset($_SESSION['firstname']);
  unset($_SESSION['lastname']);
  unset($_SESSION['user_type']);
  $_SESSION['loggedin'] = false;    
  header('location: index.php');
?>