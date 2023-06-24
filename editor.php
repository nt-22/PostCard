<!DOCTYPE html>
<html>
<head>
    <?php 
        $title = "Редактор";
        require_once "blocks/head.php";
        require_once "blocks/close.php"
    ?>
    <script src="js/canvas.js"></script>
</head>
<body class="paper desk">
    <?php require_once "share.php" ?>
    <header>
        <ul class="navbar">
            <li><a id="general" href="index.php">Главная</a></li>
            <li><a id="library" href="library.php">Библиотека</a></li>
            <li><a id="save" href="">Сохранить</a></li>
            <li><a id="share" class="open-form" >Отправить</a></li>
        </ul>
    </header>
    <div class="canvas-wrapper" id="canvas-wrapper">
    </div>
    <div class="palette">
        <div class="type">
            <input type="radio" name="pen-type" id="pen-pencil" checked> 
            <label for="pen-pencil">
                    <img src="materials/icons/pencil.png" height="20px" width="20px">
            </label>
            <input type="radio" name="pen-type" id="pen-brush"> 
            <label for="pen-brush">
                <img src="materials/icons/brush.png" height="22px" width="22px">
            </label>
        </div>
        <div class="size">
            <label for="pen-size">Толщина</label>
            <input type="range" id="pen-size" min="1" max="50">
        </div>
        <div class="color">
            <label for="pen-color"></label>
            <input type="color" id="pen-color" value="#000">
        </div>
        <div class="actions-palette">
            <button id="undo-canvas">
                <img src="materials/icons/back.png" height="24px" width="24px">
            </button>
            <button id="redo-canvas">
                <img src="materials/icons/back.png" height="24px" width="24px">
            </button>
            <button id="save-canvas">
                <img src="materials/icons/save.png" height="24px" width="24px">
            </button>
        </div>
    </div>
</body>
</html>