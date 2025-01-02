<?php
session_start();
session_destroy();
header("Location: ../Display.php");
exit;
?>
