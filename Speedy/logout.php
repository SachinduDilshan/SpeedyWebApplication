<?php
session_start();

session_unset();

session_destroy();


if(!isset($_SESSION["USER_ID"])){

    header("Location: home.html");
  
  }

?>