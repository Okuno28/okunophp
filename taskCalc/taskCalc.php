<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
    <?php //URL : http://localhost/okunophp/taskCalc/taskCalc.php ?>
</head>
<body>
    <p><?php echo('(1 + 3) * 5 ='.(1 + 3) * 5); ?></p>
    <?php #小数点第3位を四捨五入 ?>
    <p><?php echo('22 ÷ 3 ='. round(22 / 3, 2)); ?></p>
    <?php #小数点以下を切り上げ ?>
    <p><?php echo('22 ÷ 3 ='. ceil(22 / 3)); ?></p>
    <?php #小数点以下を切り下げ ?>
    <p><?php echo('22 ÷ 3 ='. floor(22 / 3)); ?></p>
    <p><?php echo('サイコロを2つ振ったときに、総計が8となる確率は？？'); ?>
        <?php echo(round(5 / 36 * 100 , 2) . " % "); ?></p>
</body>
</html>