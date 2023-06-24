<?php 
    session_start(); 

    // if ($_SESSION['user']){
    //     header('Location: profile.php');
    //     exit;
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <?php 
        $title = "Профиль";
        require_once "blocks/head.php";
    ?>
    <?php require_once "blocks/close.php" ?>
</head>
<body>
    <?php require_once "share.php" ?>
    <header>
        <ul class="navbar">
            <li><a id="editor" href="editor.php">Создать</a></li>
            <li><a id="library" href="library.php">Библиотека</a></li>
            <li><a id="general" href="index.php">Главная</a></li>
        </ul>
    </header>
    <div class="bio">
        <div class="ava">
            <img src="materials/icons/profile.png">
            <div>
                <!-- <p>Пользователь</p> -->
                <p><?= $_SESSION['user']['name'] ?></p>
            </div>
        </div>   
        <div class="buttons">
            <div id="button1">
                <a >Черновики</a>
            </div>
            <div id="button2">
                <a href="editor.php"><img  src="materials/icons/cross.png"></a>
            </div>
        </div>
    </div>
    <div class="drafts">
        <div class="draft">
            <img src="materials/postcards/5.jpg">
            <div class="prof-info">
                <p id="share" class="prof-info-text open-form">Отправить</p>
                <p id="prof-edit" class="prof-info-text"><a href="editor.php">Редактировать</a></p>
                <p id="download" class="prof-info-text">Скачать</p>
                <p id="delete" class="prof-info-text">Удалить</p>
            </div>
        </div>
        <div class="draft">
            <img src="materials/postcards/6.jpg">
            <div class="prof-info">
                <p id="share" class="prof-info-text open-form">Отправить</p>
                <p id="prof-edit" class="prof-info-text"><a href="editor.php">Редактировать</a></p>
                <p id="download" class="prof-info-text">Скачать</p>
                <p id="delete" class="prof-info-text">Удалить</p>
            </div>
        </div>
        <div class="draft">
            <img src="materials/postcards/7.jpg">
            <div class="prof-info">
                <p id="share" class="prof-info-text open-form">Отправить</p>
                <p id="prof-edit" class="prof-info-text"><a href="editor.php">Редактировать</a></p>
                <p id="download" class="prof-info-text">Скачать</p>
                <p id="delete" class="prof-info-text">Удалить</p>
            </div>
        </div>
    </div>
    <div class="more exit">
        <a href="vendor/exit.php">Выйти</a>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>