<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
    <?php //URL : http://localhost/okunophp/taskBranch/taskBranch.php ?>
</head>
<body>
    <p><?php 
        $string100 = "100";
        //課題1-1
        if($string100 == 100){
            echo('$string100は100です。');
        }else{
            echo('$string100は100ではありません。');
        } 
    ?></p>
    <p><?php
        //課題1-2
        if($string100 === 100){
            echo('$string100は数字の100です。');
        }else{
            echo('$string100は数字の100ではありません。');
        } 
    ?></p>
    <p><?php
        //課題1-3
        if($string100 > 100){
            echo('$string100は101以上です。');
        }else{
            echo('$string100は101以上ではありません。');
        } 
    ?></p>
    <p><?php
        //課題1-4
        if($string100 >= 100){
            echo('$string100は100以上です。');
        }else{
            echo('$string100は100以上ではありません。');
        } 
    ?></p>
    <p><?php 
        $scoreKokugo = rand(1,100);
        $scoreMath = rand(1,100);
        $scoreScience = rand(1,100);
        $scoreSyakai = rand(1,100);
        $scoreEng = rand(1,100);
        $avgA = ($scoreKokugo + $scoreMath + $scoreScience + $scoreSyakai + $scoreEng) / 5;
        $totalAvg = 67.3;

        //課題2-1
        echo('Aくんの平均点は' . $avgA .  '点です。');
    ?></p>
    <p><?php
        //課題2-2
        if($totalAvg <= $avgA){
            echo('Aくんの平均点は67.3以上です。');
        }else{
            echo('Aくんの平均点は67.3未満です。');
        }
    ?></p>
    <p><?php
        $case = '1';
        //課題3-1
        switch($case){
            case true:
                echo 'bool';
                break;
            case 1:
                echo 'int';
                break;
            case '1':
                echo 'string';
                break;
            default:
                echo 'other';
        }
    ?></p>
    <p><?php
        //課題3-2
        switch($case){
            case $case === true:
                echo 'bool';
                break;
            case $case === 1:
                echo 'int';
                break;
            case $case === '1':
                echo 'string';
                break;
            default:
                echo 'other';
        }
    ?></p>
</body>
</html>