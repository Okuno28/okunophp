<?php //URL : http://localhost/okunophp/db/join.php ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>create</title>
    </head>
    <body>
    <p><?php //課題１
        echo("select c.name, area, h.name from country as c left join heritage as h on c.id = country_id; </br>");
        echo("select c.name, h.name from country as c left join heritage as h on c.id = country_id where area = 'ヨーロッパ'; </br>");
        echo("select c.name, h.name, number from country as c left join heritage as h on c.id = country_id where number >= 40; </br>");
        echo("select c.name, h.name from country as c left join heritage as h on c.id = country_id where type = '自然'; </br>");
    ?></p>
    </body>
</html>