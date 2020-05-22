<?php
session_start();
ob_start();
session_destroy();
header("Location:login.html");
ob_end_flush();
?>
