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

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab_5</title>
</head>
<body>
<h1>The table</h1>

<form action="alex4.php" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="title">Title</label>
    <input type="text" name="title" required>

    <label for="categories">Category</label>
    <select name="categories" required>
        <option value="cars">Cars</option>
        <option value="bikes">Bikes</option>

    </select><br>

    <label for="description">Description:</label><br>
    <textarea name="text" rows="10" cols="54" required></textarea><br>

    <button type="submit">Submit</button>
</form>