<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskDataType</title>
    <?php //URL : http://localhost/okunophp/dataType/taskDataType.php ?>
</head>
<body>
    <p><?php 
        $appleInt = "5";
        echo( "りんごが" . $appleInt . "個あります。");
    ?></p>
    <p><?php 
        $doubleString = "string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\\)が必要です。";
        echo($doubleString);
    ?></p>
    <p><?php echo( 'I\'m Security Enginner'); ?></p>
    <p><?php
        const HELLO = "こんばんは";
        $nameString = "太郎くん";
        echo(HELLO . ", " . $nameString);
    ?></p>
</body>
</html>