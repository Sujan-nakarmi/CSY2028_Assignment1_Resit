<?php
// it checks if session has already been started if not it starts session 
if (session_status() == PHP_SESSION_NONE){
  session_start();
}
?>