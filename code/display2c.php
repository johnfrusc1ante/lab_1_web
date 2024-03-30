<?php
session_start();

$user_data = isset($_SESSION['user_data']) ? $_SESSION['user_data'] : array();

if (empty($user_data)) {
    header('Location: index2c.php');
    exit;
}
?>


