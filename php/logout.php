<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["email"]);
header("Location:../homepage.html");
?>