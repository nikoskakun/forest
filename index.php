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
        <a href="" data-select="1" class="forest_select">Лес 1</a>
        <a href="" data-select="2" class="forest_select">Лес 2</a>
        <a href="" data-select="3" class="forest_select">Лес 3</a>
        <a href="" data-select="4" class="forest_select">Лес 4</a>
    </div>
    <div id="main">
        <h1 id="title">Сажаем лес</h1>
        <select name="tree" id="tree">
            <option value="1">Дуб</option>
            <option value="2">Береза</option>
            <option value="3">Тополь</option>
            <option value="4">Сосна</option>
        </select>
        <select name="forest" id="forest">
            <option value="1">Лес 1</option>
            <option value="2">Лес 2</option>
            <option value="3">Лес 3</option>
            <option value="4">Лес 4</option>    
        </select>
        <button id="plant">Посадить дерево</button>
        <div id="info">
            <h3>Деревья в лесах</h3>
            <div class="info__inner"></div>
        </div>
    </div>
</body>
</html>