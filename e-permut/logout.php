<?php
session_start();
unset($_SESSION["id"]);
<<<<<<< HEAD
unset($_SESSION["telephone"]);
session_destroy();
=======
unset($_SESSION["name"]);
>>>>>>> f0800c431d9cf9b75551522633a65e93bbebe115
header("Location:index.php");
?>