<?php //URL : http://localhost/okunophp/session/taskSessionCounter.php ?>
<?php

/**
 * 表示を行う
 * 
 * @param  string $string
 * @return null
 */
function display(string $string)
{
    echo ('<p>' . $string . '</p>');
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskSessionCounter</title>
    </head>
    <body>
        <p><?php 
            session_start();
            if(isset($_SESSION['access']) && isset($_POST["add"])){
                $_SESSION['access']++;
            }else{
                $_SESSION['access'] = 1;
            }
            display($_SESSION['access'] . '回目のアクセスです。');
        ?></p>
        <form method = "POST">
            <button name = "add" onclick="location.href='taskSessionCounter.php?clear=0'">
                更新
            </button>
            <button name = "clear" onclick="location.href='taskSessionCounter.php?clear=1'">
                クリア
            </button>
        </form>
    </body>
</html>
