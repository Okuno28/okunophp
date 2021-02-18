<?php //URL : http://localhost/okunophp/db/create.php ?>
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
        echo("create table country( </br>
            id int auto_increment primary key, </br>
            name varchar(20) not null, </br>
            area varchar(10), </br>
            lang varchar(10) default '英語', </br>
            number int not null default 0); </br>");
    ?></p>
    <p><?php
        echo("create table heritage( </br>
            id int auto_increment primary key, </br>
            name varchar(20) not null, </br>
            country_id int not null, </br>
            type varchar(2) not null); </br>");
    ?></p>
    </body>
</html>