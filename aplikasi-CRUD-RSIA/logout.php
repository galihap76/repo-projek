<?php
session_start();
$_SESSION=[];
session_unset();
session_destroy();

setcookie('WWWDI', '', time() - 3600);
setcookie('WWWEYK', '', time() - 3600);

header("Location: login.php");
exit;

?>