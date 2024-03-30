<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'country_of_origin' => $_POST['country_of_origin']
    );

    $_SESSION['user_data'] = $data;
    header('Location: display2c.php');
    exit;
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные пользователя</title>
</head>
