<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["usertype"]);
end($_SESSION);
header("Location:../homepage.php");
?>