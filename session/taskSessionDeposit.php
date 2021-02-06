<?php //URL : http://localhost/okunophp/session/taskSessionDeposit.php ?>
<?php
// ここに回答を追記する
$sum = 0;
session_start();
if(isset($_POST["save"]) && isset($_POST["money"])){
    $int = $_POST["money"];
    $sum += $int;
    /*足し算の際に追加ができない。
    新しく数値を入力した際に、また　0＋$int　となり、積み上げていく方法がわからない*/
}else{
    $sum = 0;
}

?>
<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskSessionDeposit</title>
    </head>
    <body>
        <form action="taskSessionDeposit.php" method="post">
            <div class="content">
                <div>現在の貯金額は、<span style="color:blue;"><?php echo $sum; ?>円</span>です。</div>
                <input type="text" name="money" class="money" />円
                <div class="btnArea">
                    <input type="submit" name="save" value="貯金" />
                    <input type="submit" name="clear" value="クリア" />
                </div>
            </div>
        </form>
    </body>
</html>