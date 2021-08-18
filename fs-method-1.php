<?php 
// file system - part 1
// $quotes = readfile('readme.txt');
// echo $quotes;

$file = 'readme.txt';
if(file_exists($file)){
    // read file
    // echo readfile($file);

    // copy file
    // copy($file, 'quotes.txt');

    // absolute path
    // echo realpath($file);

    // file size
    // echo filesize($file);

    // rename file
    // rename($file,'test.txt');

    // make directory
    // mkdir('quotes');
} else {
    echo 'file does not exist';
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