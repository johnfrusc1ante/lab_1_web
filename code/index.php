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
        </thead>
        <tbody>
            <?php
            require __DIR__ . '/vendor/autoload.php';

            $client = new \Google_Client();
            $client->setApplicationName('lab4');
            $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
            $client->setAccessType('offline');
            $path = __DIR__ . '/credentials.json';
            $client->setAuthConfig($path);

            $service = new Google\Service\Sheets($client);

            $spreadsheetId = '1rHYXEr1rgsnArbYia0_lEY5NyK427HFHDt4xVjVVQ0c';

            $range = 'lab4' . '!A:D';

            $response = $service->spreadsheets_values->get($spreadsheetId, $range);
            $values = $response->getValues();

            if (!empty($values)) {
                $isFirstRow = true;
                foreach ($values as $row) {
                    if ($isFirstRow) {
                        $isFirstRow = false;
                        continue;
                    }
                    echo '<tr>';
                    foreach ($row as $cell) {
                        echo '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>