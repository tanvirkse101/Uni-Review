<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["email"]);
end($_SESSION);
header("Location:../homepage.php");
?>