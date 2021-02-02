<?php
    $db = mysqli_connect
    ("localhost","root","","db_login");

    if(!$db){
        die ("Failure TO Connect database".mysqli_connect_error());
    }
?>

