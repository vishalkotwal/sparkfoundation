<?php
    //connect to database
    $conn = mysqli_connect('localhost:3307','vishal','vishal2903','bank');

    //check the connection
    if (!$conn){
        echo 'connection error : ' .mysqli_connect_error();
    }

    


?>