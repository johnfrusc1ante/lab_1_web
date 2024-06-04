<?php
//Подключение к mysql
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['categories']);
    $description = $mysqli->real_escape_string($_POST['text']);

    $mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
}

$arr = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
    $result->close();
}
$mysqli->close();

?>