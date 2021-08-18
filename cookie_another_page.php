<?php 
// get cookie
$gender = $_COOKIE['gender'] ?? 'not selected';
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
    <h2>Gender is (<?php echo htmlspecialchars($gender) ?>)</h2>
    <a href="cookie.php"><-- go back</a>
</body>
</html>