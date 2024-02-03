<?php
// Created by: janek22TheCoder
// Created on: 2022-07-14

$error = isset($_GET['error']) ? $_GET['error'] : '404.php';

include('errors/' . $error);
