<?php
include_once 'config/Database.php';
include_once 'config/Main.php';

$main = new Main();
$main->adminLogin();
//$main->adminLogout();
print_r($main->checkAdmin());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
table {
    border-collapse: collapse;
            width: 100%;
        }

        table, td, th {
    border: 1px solid black;
        }
    </style>
</head>
<body>