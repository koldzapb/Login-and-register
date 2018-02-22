<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="main.js"></script>
</head>
<body>
    


<?php
session_start();
require 'db.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND  password = '$password'";
$result = $pdo->query($sql);
if ($result->rowCount() == 1) {
$_SESSION['username'] = $username;
header("Location: index.php");

}else{
    header("Location: error.html");

}




?>