<?php

if (isset($_POST['submit'])) {

    if (!empty($_FILES['upload']['name'])) {

        $dest = 'uploads/' . $_FILES['upload']['name'];

        echo $_FILES['upload']['name'] . '<br>';
        echo $_FILES['upload']['type'] . '<br>';
        echo $_FILES['upload']['tmp_name'] . '<br>';
        echo $_FILES['upload']['size'] . '<br>';

        move_uploaded_file($_FILES['upload']['tmp_name'], $dest);
    }
} else {
    echo 'File upload is required';
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <label for="upload">Select image to upload:</label>
        <input type="file" name="upload" id="upload" required>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>