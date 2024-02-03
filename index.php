<?php
// Created by: janek22TheCoder
// Created on: 2022-07-14

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (!file_exists($page . '.php')) {
    header("Location: /error.php?error=404.php");
    exit();
}

include('header.php');

include($page . '.php');


include('footer.php');
?>
