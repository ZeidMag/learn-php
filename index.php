<?php 
$blogs = [
    ['title'=>'mario party','author'=> 'mario','content'=> 'lorem','likes'=>30],
    ['mario kart cheats', 'toad', 'lorem',25],
    ['zelda hidden chests','link','lorem',25]
];
$blogs[] = ['title'=>'castle party', 'author'=> 'peach', 'content'=> 'lorem', 'likes'=>100];
// print_r($blogs);
$popped = array_pop($blogs);
// echo $blogs[3]['title'];
print_r($popped);
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
    <h1>Test </h1>
</body>
</html>