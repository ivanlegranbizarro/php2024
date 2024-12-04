<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    echo "The email $email was submitted";
    die;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forms in PHP</title>
</head>

<body>
    <h1>Please submit the form</h1>
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
        <button>Submit</button>
    </form>

</body>

</html>
