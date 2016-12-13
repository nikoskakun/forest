<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div id="wrap">
        <div id="main__menu" class="clearfix">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="addforest.php">Действия над лесом</a></li>
                <li><a href="addtree.php">Действия над деревьями</a></li>
            </ul>
        </div>
        <div id="sidebar">
            <h3>Выберите лес для просмотра его деревьев:</h3>
            <div class="sidebar__menu"></div>
        </div>
        <div id="main">
            <h1 id="title">Сажаем лес</h1>
            <select name="tree" id="tree"></select>
            <select name="forest" id="forest"></select>
            <button id="plant">Посадить дерево</button>
            <div id="info">
                <h3>Деревья в лесах</h3>
                <div class="info__inner"></div>
            </div>
        </div>
    </div>
</body>
</html>