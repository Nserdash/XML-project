<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class = "container">
    
<div class = "search margin-50">
        <form action = "" method = "get">
            <input name = "date" type = "text" placeholder = "Введите дату в формате dd/mm/yyyy">
            <input type = "submit" value = "Показать" name = "go">
        </form>
        <form action = "" method = "get">
            <input type = "submit" value = "Очистить" name = "delete">
        </form>
    </div>

    <form action = "" method = "get">
        <input name = "lookfor" type = "text" placeholder = "Поиск валюты">
        <input type = "submit" value = "Найти" name = "search">
    </form>

    <?php
        
        if(isset($_GET['search'])) {
            $search->RenderTable();    
        }  else {
            $render->RenderTable();
        }
        
        
     ?>

</div>
</body>
</html>