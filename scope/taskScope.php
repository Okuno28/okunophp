<?php
    function randomRecursiveCalc(int $int): array{
        global $total;
        for($i = 1; $i <= $int; $i++){
            $number = random_int(1, 100);
            $total += $number;
            $array[$i] = $number;
        }
        return $array;
    };
?>
 <?php //URL : http://localhost/okunophp/scope/taskScope.php ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskScope</title>
</head>
<body>
    <p><?php 
        $int = rand(1, 15);
        $table = randomRecursiveCalc($int);
        echo("<pre>");
        var_dump($table);
        echo("</pre>");
        echo('処理回数：' . $int);
        echo('<br>合計 ' . $total);
       
    ?></p>
    <table>
        <tr>
            <th>回</th>
            <th>数値</th>
        <?php foreach($table as $key => $value){ 
            echo('<tr>');
            echo('<td>' . ($key) . '</td>');
            echo('<td>' . $value . '</td>');
            echo('</tr>');
        }
        ?>
        <tr>
            <td>合計</td>
            <td><?php echo($total); ?></td>
        </tr>
    </table>
    </body>
</html>