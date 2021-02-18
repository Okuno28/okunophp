<?php //URL : http://localhost/okunophp/db/update.php ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>create</title>
    </head>
    <body>
    <p><?php
        echo("update country set area = '東アジア' where name = '日本';");
    ?></p>
    <p><?php
        echo("update heritage set name = '富士山-信仰の対象と芸術の源泉', type = '文化' where name = '富士山';");
    ?></p>
    </body>
</html>