<?php
session_start();
session_destroy();
header("location:p-login.php");
?>
