<?php //URL : http://localhost/okunophp/db/insert.php ?>
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
        echo("insert into country (name, area, lang, number) values ('日本', 'アジア', '日本語', 81); </br>");
        echo("insert into country (name, area, lang, number) values ('イタリア', 'ヨーロッパ', 'イタリア語', 39); </br>");
        echo("insert into country (name, area, lang, number) values ('アメリカ合衆国', '北アメリカ', '英語', 1); </br>");
        echo("insert into country (name, area, lang, number) values ('フランス', 'ヨーロッパ', 'フランス語', 33); </br>");
        echo("insert into country (name, area, lang, number) values ('イギリス', 'ヨーロッパ', '英語', 44); </br>");
    ?></p>
    <p><?php //課題２
        echo("insert into heritage values (1, '自由の女神像', 3, '文化'); </br>");
        echo("insert into heritage values (2, '小笠原諸島', 1, '自然'); </br>");
        echo("insert into heritage values (3, '姫路城', 1, '文化'); </br>");
        echo("insert into heritage values (4, 'ロンドン塔', 5, '文化'); </br>");
        echo("insert into heritage values (5, 'ナポリ歴史地区', 2, '文化'); </br>");
        echo("insert into heritage values (6, '富士山', 1, '自然'); </br>");
        echo("insert into heritage values (7, 'ヴェルサイユの宮殿と庭園', 4, '文化'); </br>");
    ?></p>
    </body>
</html>