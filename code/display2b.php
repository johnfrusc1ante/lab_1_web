<?php
session_start();

$surname = isset($_SESSION['surname']) ? $_SESSION['surname'] : '';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : '';

if (empty($surname) || empty($name) || empty($age)) {
    header('Location: formSNA.php');
    exit;
}
?>