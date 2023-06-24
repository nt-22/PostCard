<?php
    $connect = mysqli_connect('localhost', 'root', 'mysql', 'postcard-bd');
    
    if (!$connect){
        die('Error connect to DataBase');
    }
    // else  die('Super!');
?>