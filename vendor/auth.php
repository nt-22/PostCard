<?php
    session_start();
    require_once 'connect.php';

    $name = $_POST['name-login'];
    $password = md5($_POST['password-login']);
    // $redicet = $_SERVER['HTTP_REFERER'];

    $check_user = mysqli_query($connect, 
    "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");
    
    if (mysqli_num_rows($check_user) === 1){
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "name" => $user['name']
        ];

        header('Location: ../profile.php');
    }
    else{
        $_SESSION['msg-error'] = "Неверный логин или пароль";
        header ('Location: ../index.php');
    } 
?>