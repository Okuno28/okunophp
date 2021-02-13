<?php //URL : http://localhost/okunophp/cookie/taskCookieSetColor.php ?>
<?php
/**
 * 表示を行う
 * 
 * @param  string $string
 * @return null
 */
function display(string $string)
{
    echo ($string);
}

// ここに回答を追記
$color = 'black';
if($_SERVER['QUERY_STRING'] == 'color=blue'){
    $color = 'blue';
}elseif($_SERVER['QUERY_STRING'] == 'color=red'){
    $color = 'red';
}elseif($_SERVER['QUERY_STRING'] == 'color=green'){
    $color = 'green';
}
setcookie('color', $color);
$text = '色を設定しました！';

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskCookieSetColor</title>
    </head>
    <body>
        <?php
            echo('<p style="color: ' . $color . '">');
            display($text); 
            echo('</p>');
        ?>
        <button onclick="location.href='taskCookieImplement.php'">
            戻る
        </button>
    </body>
</html>