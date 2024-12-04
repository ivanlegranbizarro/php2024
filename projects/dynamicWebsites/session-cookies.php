<?php

declare(strict_types=1);

session_start();

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    setcookie('user', $_POST['name'], time() + 3600);
}

$hasCookie = isset($_COOKIE['user']);

if (!$hasCookie) {
    $welcomeMessage = 'Welcome back, user';
} else {
    $welcomeMessage = 'Welcome back, ' . htmlspecialchars($_COOKIE["user"]);
}


if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}


$visitsMessage = 'This is your number of visits ' . $_SESSION["visits"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cookies and Sessions on PHP</title>
</head>

<body>
    <?php if (!$hasCookie): ?>
        <form method="post">
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name" />
            <button>Track</button>
        </form>
    <?php endif; ?>
    <p><?= $welcomeMessage ?></p>
    <p><?= $visitsMessage ?></p>
</body>

</html>
