<?php 
    function calcNumber(int $a, int $b, bool $boolean ){
        if ($boolean == true){
            echo($a . "+" . $b . "=" . ($a + $b) . "<br>");
        }elseif($boolean == false){
            echo($a . "-" . $b . "=" . ($a - $b) . "<br>");
        }
    }

    $mumei = function (int $c, bool $bool){
        if ($bool == true){
            echo($c . 'の2乗は' . ($c * $c) . "<br>");
        }else{
            echo($c . 'の3乗は' . ($c * $c * $c) . "<br>");
        }
    };

    function calcAverage(array $array): float{
        $total = 0;
        $avg = 0;
        foreach($array as $number){
            $total += $number;
            $avg = round($total / count($array), 0);
        }
        return $avg;
    };
    
    function differenceScore(array $array1, array $array2): array{
        $difference = [
            'nationalLanguage' => abs($array1['nationalLanguage'] - $array2['nationalLanguage']),
            'math' => abs($array1['math'] - $array2['math']),
            'society' => abs($array1['society'] - $array2['society']),
            'science' => abs($array1['science'] - $array2['science']),
            'english' => abs($array1['english'] - $array2['english']),
        ];
        return $difference;
    };
?>