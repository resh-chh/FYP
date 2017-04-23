<?php
session_start();

setcookie('user', "" , time()-3600, '/');
setcookie('role', "", time()-3600, '/');
session_unset();
session_destroy();

header('location: ../html/loginpage.php');
?>