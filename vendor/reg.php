<!-- <pre> 
    <?php 
        print_r($_POST);
    ?>
</pre> -->
<?php
    session_start();
    require_once 'connect.php';
    
    $name = $_POST['name-logup'];
    $password = md5($_POST['password-logup']); //хеширование

    mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `password`) 
    VALUES (NULL, '$name', '$password')");

    $_SESSION['msg'] = 'Регистрация прошла успешно :)';
    header("Location: ../index.php");
?>

