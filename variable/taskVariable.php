<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskVariable</title>
    <?php //URL : http://localhost/okunophp/variable/taskVariable.php ?>
</head>
<body>
    <?php
        const TAX = 1.1;
        $priceApple = 110;
        $numApple = 15;
        $totalApple = $priceApple * $numApple;
        $priceOrange = 80;
        $numOrange = 12;
        $totalOrange = $priceOrange * $numOrange;
        $total = $totalApple + $totalOrange;
        $totalTax = $total * TAX;
        $totalNum = $numApple + $numOrange;
        $oneFruit = round ($total / $totalNum);
    ?>
    <p><?php echo('りんごの総額（税抜）は' . $totalApple . '円です。'); ?></p>
    <p><?php echo('オレンジの総額（税抜）は' . $totalOrange . '円です。'); ?></p>
    <p><?php echo('総額（税抜）は' . $total . '円です。'); ?></p>
    <p><?php echo('総額（税込）は' . $totalTax . '円です。'); ?></p>
    <p><?php echo('フルーツ1個あたりの金額（税抜）は' . $oneFruit . '円です。'); ?></p>
</body>
</html>