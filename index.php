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
    <div id="sidebar">
        <h3>Выберите лес для просмотра его деревьев:</h3>
        <div class="sidebar__menu"></div>
    </div>
    <div id="main">
        <h1 id="title">Сажаем лес</h1>
        <a href="" class="toggle__button">Нажмите для добавления леса или дерева</a>
        <div id="add__object">
            <input type="text" placeholder="Введите название леса" id="forest1">
            <button class="add__inner__item" data-f=1>Добавить лес</button>    
            <input type="text" placeholder="Введите название дерева" id="tree1">
            <button class="add__inner__item" data-f=2 >Добавить дерево</button>
        </div>
        <select name="tree" id="tree"></select>
        <select name="forest" id="forest"></select>
        <button id="plant">Посадить дерево</button>
        <div id="info">
            <h3>Деревья в лесах</h3>
            <div class="info__inner"></div>
        </div>
    </div>
</body>
</html>