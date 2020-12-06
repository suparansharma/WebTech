<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["uname"]);
header("Location:../view/loginfrom.php");
?>