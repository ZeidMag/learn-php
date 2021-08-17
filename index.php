<?php 
//  include('ninjas.php'); // if error occur, it will throw warning and carry on
//  require('ninjas.php'); // if error occur, it will throw fatal error and wont carry on with the code

// include 'ninjas.php'; // could be written without ()
// require 'ninjas.php'; // could be written without ()

 include('ninjas.php');
 echo 'end of php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <?php include('content.php') ?>
    <?php include('content.php') ?>
    <?php include('content.php') ?>
</body>
</html>