<?php //URL : http://localhost/okunophp/db/select.php ?>
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
        echo("select name, area from country where area = 'ヨーロッパ'; </br>");
        echo("select name, area from country where area != 'ヨーロッパ'; </br>");
        echo("select name, lang from country where lang = '英語'; </br>");
        echo("select name, area, lang from country where area = 'ヨーロッパ' and lang = '英語'; </br>");
        echo("select * from country where area = 'ヨーロッパ' or number < 40; </br>");
    ?></p>
    <p><?php //課題２
        echo("select name from country where name like 'イ%'; </br>");
        echo("select name from country where name like '%ス'; </br>");
        echo("select * from heritage where country_id in (1,3); </br>");
        echo("select * from heritage where country_id not in (1,3); </br>");
        echo("select * from heritage where type = '文化' order by country_id; </br>");
        echo("select * from heritage order by country_id, id; </br>");
    ?></p>
    </body>
</html>