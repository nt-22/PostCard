<?php 
    session_start();
    error_reporting(0);

    if ($_SESSION['user']){
        header('Location: profile.php');
        exit;
    }
?>
<div class="form-bg login-page">
    <div class="form">
        <div class="close">
            <img src="materials/icons/cross.png" class="close-form">
        </div>
        <form action="vendor/auth.php" method="post" class="string" >
            <div class="area">
                <p>Имя пользователя</p>
                <input type="text" placeholder="Имя" id="name-login" name="name-login">
                <p>Пароль</p>
                <input type="password" placeholder="Пароль" id="password-login" name="password-login"> 
            </div>
            <div id="message-login" class="msg">
                <?php 
                    echo $_SESSION['msg-error'];
                    unset($_SESSION['msg-error']);
                ?>
            </div>
            <div>
                <button href="#" type="submit" id="login">Войти</button>
            </div>
        </form>
        <div class="open-page">
            <p>Регистрация</p>
        </div>
    </div>
    </div>

<div class="form-bg logup-page">
    <div class="form"> 
        <div class="close">
            <img src="materials/icons/cross.png" class="close-form">
        </div>
        <form action="vendor/reg.php" method="post" class="string" >
            <div class="area">
                <p>Имя пользователя</p>
                <input type="text" placeholder="Имя" id="name-logup" name="name-logup">
                <p>Пароль</p>
                <input type="password" placeholder="Пароль" id="password-logup" name="password-logup"> 
            </div>
            <div id="message-logup" class="msg">
                <div class="green" id="success">
                    <?php 
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                    ?>   
                </div>
            </div>
            <div>
                <button id="logup" type="submit">Регистрация</button>
                <!-- <?php //if(isset($_GET['formsubmit'])) echo "<script>alert('Регистрация прошла успешно :)');</script>"; ?> -->
            </div>
        </form>
        <div class="open-page">
            <p>Войти</p>
        </div>
    </div>
</div>