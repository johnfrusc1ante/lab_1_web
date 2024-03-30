#task 3
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avito</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label><br>
        <input type="email" name="email" required><br><br>
        <label for="category">Category</label>
        <select name="category" required>
            <?php
            $dirPath = "./categories/";
            if (is_dir($dirPath)) {
                $subDirs = array_filter(glob($dirPath . '*'), 'is_dir');
                foreach ($subDirs as $subDir) {
                    $name = basename($subDir);
                    echo "<option value=\"$name\">$name</option>";
                }
            }
            ?>
        </select><br><br>
        <label for="title">Title</label><br>
        <input type="text" name="title" required><br>
        <label for="description">Description</label><br>
        <textarea rows="3" name="description" required></textarea><br>
        <input type="submit" value="Save"><br>
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Email</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>