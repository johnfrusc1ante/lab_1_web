<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    header('Location: display.php');
    exit;
}
?>