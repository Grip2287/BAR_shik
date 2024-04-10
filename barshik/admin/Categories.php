<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
<?php
include "header_admin.php";
?>
        <section class="sort_1">
            <div class="sort">
                <ul class="list-group list-group-horizontal mt-5 mb-3">
                    <h4>Сортировка по дате публикации:</h4>
                    <li class="list-group-item">
                        <a href=""><img width="30" src="asc-sort.png" alt=""></a>
                    </li>
                    <li class="list-group-item">
                        <a href=""><img width="30" src="desc-sort.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="products">
        <table>
            <tr>
                <th>Название категории</th>
                <th>Количество</th>
            </tr>
            <tr>
                <th>Margaret Nguyen</th>
                <td>427311</td>
                <td><button><img src="/add_1237946.png" alt=""></button></td>
                <td><button><img src="/shape_12205851.png" alt=""></button></td>
            </tr>
            <tr>
                <th>Edvard Galinski</th>
                <td>533175</td>
                <td><button><img src="/add_1237946.png" alt=""></button></td>
                <td><button><img src="/shape_12205851.png" alt=""></button></td>
            </tr>
            <tr>
                <th>Hoshi Nakamura</th>
                <td>601942</td>
                <td><button><img src="/add_1237946.png" alt=""></button></td>
                <td><button><img src="/shape_12205851.png" alt=""></button></td>
            </tr>
        </table>
    </div>
    <div class="adding">
        <p>Добавление товара</p>
        <form action="">
            <input type="text" name="Name" id="" placeholder="Название">
            <input type="text" name="Cated" id="" placeholder="Категория">
            <input type="submit" value="Отправить" placeholder="Создать">
        </form>
    </div>
</body>
</html>