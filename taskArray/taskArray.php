<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
    <?php //URL : http://localhost/okunophp/taskArray/taskArray.php ?>
</head>
<body>
    <p><?php
        echo('課題1');
        $income = [
            2018 => 4410000,
            2017 => 4320000,
            2016 => 4220000,
            2015 => 4200000,
            2014 => 4150000,
        ];
        echo("<pre>");
        var_dump ($income);
        echo ("</pre>");
    ?></p>
    <p><?php 
        echo('過去5年間の平均年収は' . array_sum($income) / count($income) . 'です。');
    ?></p>

    <p><?php
        echo("課題2");
        $testScores = [
            'A' => 80,
            'B' => 55,
            'C' => 61,
            'D' => 76,
            'E' => 34,
            'F' => 93,
        ];
        echo("<pre>");
        var_dump ($testScores);
        echo ("</pre>");
    ?></p>
    <p><?php 
        echo('平均点数は' . array_sum($testScores) / count($testScores) . 'です。');
    ?></p>
</body>
</html>