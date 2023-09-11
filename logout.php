<?php

session_start();

session_unset();
// Destroy session
session_destroy();

// setcookie('id', '', time()-3600);
setcookie('username', '', time()-3600);
setcookie('password', '', time()-3600);
header("Location: login.php");
?>