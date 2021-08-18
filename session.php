<?php 
 // superglobals: always start with $_
 // $_GET, $_POST
 // $_SERVER
 // $_SESSION
 // $_COOKIE



// $_SESSION stores data between pages in the server
// the session lasts until the browser is closed
if(isset($_POST['submit'])){
    // initialize the session
    session_start();

    $_SESSION['name'] = $_POST['name'];
    header('Location: session_another_page.php');
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="name" id="">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>