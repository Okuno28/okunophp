<?php
    function divideQuarter(int $int): int{
        $answer = $int / 4;
        return $answer;
    }
    function divideQuarterReference(int &$int){
        $int /= 4;
    }
?>
<?php //URL : http://localhost/okunophp/taskHandOver/taskHandOver.php ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskHandOver</title>
</head>
<body>
    <p><?php 
        /*課題1
        2000を4で割った値は500です。（値渡し）*/
        $number1 = 2000;
        echo($number1 . 'を4で割った値は' . divideQuarter($number1) . 'です。'); 
    ?></p>
    <p><?php 
        /*課題2
        1000を4で割った値は250です。（値渡し）*/
        $number2 = 1000;
        echo($number2 . 'を4で割った値は');
        divideQuarterReference($number2);
        echo($number2);
        echo('です。');
    ?></p>
</body>
</html>