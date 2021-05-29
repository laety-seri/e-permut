<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["telephone"]);
session_destroy();
header("Location:index.php");
?>