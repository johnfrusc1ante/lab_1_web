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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The table</title>
    <style>
        body {
            font-family: Ebrima;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<h1>The table</h1>

<form action="index.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="example@email.com" required><br />
    <label for="title">Title</label>
    <input type="text" name="title" required><br>

    <label for="categories">Categories:</label>
    <select name="categories" required>
        <option value="cars">Cars</option>
        <option value="bikes">Bikes</option>

    </select><br>

    <label for="description">Description:</label><br>
    <textarea name="text" rows="10" cols="54" required></textarea><br>
    <button type="submit">Post</button>
</form>
<h2>Recent notices:</h2>
<table>
    <tr>
        <th>Email</th>
        <th>Categories</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
    <?php foreach ($arr as $item): ?>
        <tr>
            <td><?= $item['email'] ?></td>
            <td><?= $item['category'] ?></td>
            <td><?= $item['title'] ?></td>
            <td><?= $item['description'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>