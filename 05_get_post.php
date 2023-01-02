<?php

session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    echo "$username, $password";

    if ($username == 'Nads' && $password == 'password') {
        echo '<h1>CORRECT PASSWORD BEACH</h1>';
        $_SESSION['username'] = $username;
        header('Location: http://localhost:8080/PHP%20Practice/dashboard.php', true, 301);
    } else {
        echo 'IT IS INCORRECT';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms PHP (Get and Post)</title>
</head>

<body>
    <form action="" method="POST">

        <fieldset>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </fieldset>

        <fieldset>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </fieldset>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>