<?php
session_start();
if(!$_SESSION['documento']) {
    header('Location: login.php');
    exit();
}