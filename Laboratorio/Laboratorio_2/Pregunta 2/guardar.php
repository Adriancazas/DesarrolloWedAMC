<?php
session_start();

$_SESSION['a'] = $_POST['a'];
$_SESSION['b'] = $_POST['b'];
$_SESSION['c'] = $_POST['c'];

header("Location: menu.php");
exit();
