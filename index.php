<?php 
function myFunc(){
    $price = 10;
    echo $price;
}
$name = "zeid"; // global variables cannot be accessed within functions without global declaration in the function

function sayHello(){
    global $name;
    $name = "omar"; // once global variable is accessed, it can be modified and overwritten 
    echo "hello $name <br/>";
}

// sayHello();
// echo $name;

function sayBye($name){
    $name = "jom3aa";
    echo "bye $name <br/>";
}

sayBye($name);
echo $name;
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
</body>
</html>