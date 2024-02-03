<?php
// Created by: janek22TheCoder
// Created on: 2022-07-14
session_start();

if(isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    header("Location: dashboard.php");
    exit();
}

if(isset($_POST['login'])) {
    $config = parse_ini_file('config.ini');

    if($_POST['username'] == $config['username'] && $_POST['password'] == $config['password']) {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Incorrect data!";
    }
}
include('header.php');
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel - login</title>
</head>
<body>
    <h1>LOGIN</h1>

    <?php if(isset($error_message)) { ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php } ?>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php
include('footer.php');
?>