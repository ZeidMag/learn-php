<?php

    // connect to database 
    $conn = mysqli_connect('localhost','zeid','abcd1234','ninja_pizza');
    // $conn2 = new mysqli('localhost','zeid','abcd1234','ninja_pizza');
    // $conn = new PDO('mysql:host=localhost;dbname=ninja_pizza','zeid','abcd1234');
    // check connection
    if(!$conn){
        echo 'Connection error:' . mysqli_connect_error();
        // echo 'Connection error:' . $conn2->connect_error();
    } 

?>