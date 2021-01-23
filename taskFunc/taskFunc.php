<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
    <?php //URL : http://localhost/okunophp/taskFunc/taskFunc.php ?>
</head>
<body>
    <p><?php 
        //課題１
        $text ='関数で文字列を表示！';
        $text2 = "<br>" . 254 . ' x ' . 322 . " = " . 254 * 322;
        function display(string $string){
            echo($string);
        }
        display($text);
        display($text2);
    ?></p>
    <p><?php 
        //課題2
        function createRandomNumberArray(): array
        {
             for($count = 1; $count <= 10; $count++){
                 $randomNum[$count - 1] = random_int(1, 100);
           }
             return $randomNum;
        }
        echo("<pre>");
        var_dump(createRandomNumberArray());
        echo("</pre>");
    ?></p>
    <p><?php 
        //課題3
        function createRandomNumberArrayAndDisplay(): array{
            for($count = 1; $count <= 10; $count++){
              $randomNumArray[$count - 1] = random_int(1, 100);
            } 
            return $randomNumArray;
        }
        foreach(createRandomNumberArrayAndDisplay() as $key => $randomInt){
            display($key + 1 . "番目の数値：" . $randomInt . "</br>");
        }
    
    ?></p>
    <p><?php
        //課題4
        $data = [
            47,
            31,
            86,
            16,
            39,
            53,
            94,
            3,
            74,
            28,
        ];
        function numberArrayCalcAndDisplay (array $array){
            $sumArray = 0;
            for($i = 0; $i < count($array); $i++){
                if($i == 0){
                    echo("計算式は" . $array[$i]);
                    $sumArray = $array[$i];
                }elseif(80 <= $array[$i]){
                    echo(" - ". $array[$i]);
                    $sumArray -= $array[$i];
                }else{
                    echo(" + ". $array[$i]);
                    $sumArray += $array[$i];
                }
            }
            echo("<br>合計は" . $sumArray . "です！");
        }
        numberArrayCalcAndDisplay($data);

        function numberAverageCalc(array $array, int $decimal): float{
            $totalArray = 0;
            foreach($array as $int){
                $totalArray += $int; 
            }
            $avgArray = round($totalArray / count($array) , $decimal);
            return $avgArray;
        }
        
        echo("<br>平均（小数点第" . 1 . "位は四捨五入）は" . numberAverageCalc($data, 0) . "です！");
        echo("<br>平均（小数点第" . 2 . "位は四捨五入）は" . numberAverageCalc($data, 1) . "です！");
        $compare = numberAverageCalc($data, 0);
        $amount = 0;
        
        for($i = 0; $i < count($data); $i++){
            if($data[$i] >= $compare){
                $amount++;
            }
        }
        echo("<br>平均以上は" . $amount . "以上です！");

    ?></p>
</body>
</html>