<?php
    //create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Test
    if(mysqli_connect_errno()){
        echo 'Failed to connect to mySQL '. mysqli_connect_errno;
    }

?>