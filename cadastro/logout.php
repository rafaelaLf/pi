PHP
<?php
session_start();
unset($_SESSION['documento']);
header('Location: ../index.php');
exit();
?>