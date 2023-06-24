<?php 
    // if (!($_SESSION['user'])){
    //     header('Location: index.php');
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <?php 
        $title = "Библиотека";
        require_once "blocks/head.php";
        require_once "vendor/validation.php";
        require_once "blocks/close.php" 
    ?>

</head>
<body class="white">
    <?php require_once "share.php" ?>
    <!-- <?php //require_once "form.php" ?>  -->
    <header>
        <ul class="navbar">
            <li><a id="editor" href="editor.php">Создать</a></li>
            <li><a id="general" href="index.php">Главная</a></li>
            <li><a id="profile" class="open-form">Профиль</a></li>
        </ul>
    </header>
    <div class="unic2">
        <p>Если лень придумывать, </p>
        <p>то выбирай из готовых крутых идей</p>
    </div>
    <div class="drafts">
        <div class="draft">
            <img src="materials/postcards/8.jpg">
            <div class="lib-send">
                <p id="share" class="lib-send-text open-form">Отправить</p>
            </div>
        </div>
        <div class="draft">
            <img src="materials/postcards/9.jpg">
            <div class="lib-send">
                <p id="share" class="lib-send-text open-form">Отправить</p>
            </div>
        </div>
        <div class="draft">
            <img src="materials/postcards/10.jpg">
            <div class="lib-send">
                <p id="share" class="lib-send-text open-form">Отправить</p>
            </div>
        </div>
        <div class="draft">
            <img src="materials/postcards/11.jpg">
            <div class="lib-send">
                <p id="share" class="lib-send-text open-form">Отправить</p>
            </div>
        </div>
        <div class="draft">
            <img src="materials/postcards/12.jpg">
            <div class="lib-send">
                <p id="share" class="lib-send-text open-form">Отправить</p>
            </div>
        </div>
        <div class="draft">
            <img src="materials/postcards/13.jpg">
            <div class="lib-send">
                <p id="share" class="lib-send-text open-form">Отправить</p>
            </div>
        <!-- </div>    <div class="draft"> -->
            <!-- <img src="materials/postcards/14.jpg"> -->
        <!-- </div> -->
    </div>
    <div class="more">
        <a>Загрузить ещё</a>
    </div>
    <?php require_once "blocks/footer.php" ?>
    <script src="lib-serv/out.js"></script>
</body>
</html>