<?php
session_start();
print("foi");
$_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : '';
$_SESSION['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iae parceiro <?php echo $_SESSION['name'] ?></title>
</head>

<body>
    <h1>
        chega junto <?php echo $_SESSION['name'] ?>!
        seus dados <a href="home.php">nesse link</a>
    </h1>
</body>

</html>