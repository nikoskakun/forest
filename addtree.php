<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/tree.js"></script>
</head>
<body>
    <div id="overlay"></div>
    <div id="wrap">
        <div id="main__menu">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="addforest.php">Действия над лесом</a></li>
                <li><a href="addtree.php">Действия над деревьями</a></li>
            </ul>
        </div>
        <div id="main" style="float:none;width:100%">
            <h1 id="title">Список деревьев</h1>
            <div id="add__object">
                <div class="add__forest">
                    <input type="text" id="tree__item">
                    <button class="ins">Добавить дерево</button>
                </div>
                <table id="tree__object">
                    
                </table>
                <div class="app__object__form">
                    <div class="app__object__form__title">Изменить название дерева</div>
                    <div class="app__object__form__input">
                        <input type="text" id="target__val">
                    </div>
                    <div class="app__object__form__button">
                        <button class="btn_action">Изменить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>