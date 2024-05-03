<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name = "email" required>

        <label for="category">Category</label>
        <select name="category">
            <option value="cars">Cars</option>
            <option value="bikes">Bikes</option>
        </select>

        <label for="title">Title</label>
        <input type="text" name = "title" required><br/>
        <label for="description">Description</label><br/>
        <textarea name="description" rows="1" cols = "25"></textarea><br/>

        <input type="submit" value="Save">
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <tr>
            <th>Email</th>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
        </tr>