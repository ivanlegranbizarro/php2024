<?php

declare(strict_types=1);

$pageTitle = 'Dynamic PHP Page';
$currentTime = date('H:i:s');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $pageTitle ?></title>
</head>

<body>
    <h1>Welcome</h1>
    <p>
        The current server time is: <strong><?= $currentTime ?></strong>
    </p>

    <table>
        <thead>
            <tr>
                <td><strong>Key</strong></td>
                <td><strong>Value</strong></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SERVER as $key => $value) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
