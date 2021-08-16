<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Make MySQLi throw exceptions.

/** Conexão com o banco */

$host="localhost";
$db="takecare";
$username="root";
$pass="";

$conexao = new mysqli($host,$username,$pass,$db);
