<!DOCTYPE html>
<html>
<head>
    <?php 
        $title = "PostCard";
        require_once "blocks/head.php";
        require_once "vendor/validation.php";
        require_once "blocks/close.php";
    ?>
    </head>
<body class="paper">
    <?php require_once "form.php" ?> 
    <header>
        <ul class="navbar">
            <li><a id="editor" href="editor.php">Создать</a></li>
            <li><a id="library" href="library.php">Библиотека</a></li>
            <li><a id="login" class="open-form">Профиль</a></li>
        </ul>
    </header>
    
    <div class="logo">
        <img src="materials\logo\2-вариант.gif" height="205px" width="410px" alt="logo">
    </div >
    <div class="unic">
        <a>Digital</a>-открытки на память :)
    </div>
    <div class="cards">
        <div class="card">
            <img src="materials/postcards/1.jpg" height="543px"  width="385px">
        </div>
        <div class="card">
            <img src="materials/postcards/2.jpg" height="543px"  width="385px">
        </div>
        <div class="card">
            <img src="materials/postcards/3.jpg" height="543px"  width="385px"> 
        </div>
    </div>
    <?php require_once "blocks/footer.php" ?>
</body>
</html>