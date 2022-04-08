<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=in_class_work", "root", "");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form>
        <h1>Registration</h1>

        <div class="name">
            <input type="text" placeholder="First Name" required>
            <input type="text" placeholder="Last Name" required>
        </div>

        <div class="e-mail">
            <input type="email" placeholder="E-mail Address" required>
        </div>

        <div class="password">
            <input type="password" placeholder="Password">
            <input type="password" placeholder="Confirm">
        </div>

        <button type="submit">Register</button>
    </form>
</body>

</html>