<?php
include "include/header.php";
session_destroy();
$_SESSION = [];
header("Location: index.php");
?>