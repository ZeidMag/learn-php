<?php
    // initialize session in every page that need to access session variables
    session_start();

    // overriding session variables
    $_SESSION['name'] = 'i just changed the variable';

    // deleting session variables
    if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'noname'){
        // unset single variable
        // unset($_SESSION['name']);

        //unset all variables
        session_unset();
    }
    
    
    $name = $_SESSION['name'] ?? 'Guest';
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
    <h1>hello <?php echo htmlspecialchars($name) ?></h1>
    <a href="index.php"> <--- go back</a>
</body>
</html>