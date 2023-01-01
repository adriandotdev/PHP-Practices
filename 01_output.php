<?php

declare(strict_types=1)

$users = [

    [
        'email' => 'email@gmail.com',
        'password' => 'mypass',
        'given_name' => 'Adrian Nads'
    ],

    [
        'email' => 'email2@gmail.com',
        'password' => 'mypass',
        'given_name' => 'Adrian Nads'
    ]
];

// foreach
foreach ($users as $key => $value) {

    echo 'User: ' . $value['given_name'] . ' - ' . $value['email'] . '<br>';
}

// normal for loop
for ($i = 0; $i < count($users); $i++) {
    echo 'User: ' . $users[$i]['given_name'] . ' - ' . $users[$i]['email'] . '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>