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