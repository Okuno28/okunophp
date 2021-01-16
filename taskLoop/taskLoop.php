<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
    <?php //URL : http://localhost/okunophp/taskLoop/taskLoop.php ?>
</head>
<body>
    <p><?php 
        $fruit = [
            "apple" => [
                "japanese" => "りんご",
                "price" => 80,
            ],
            "orange" => [
                "japanese" => "オレンジ",
                "price" => 120,
            ],
            "grape" => [
                "japanese" => "ぶどう",
                "price" => 220,
            ],
        ];
        foreach($fruit as $key => $value){
        echo('英語では' . $key . 'と表示され、日本語では' . $value["japanese"] . '、価格は' . $value["price"] . '円です。<br>');

        }
    ?></p>
    <?php 
        $testScores = [
            "A" => [
                "name" => "A",
                "国語" => 34,
                "数学" => 67,
                "社会" => 45,
                "理科" => 34,
                "英語" => 89,
            ],
            "B" => [
                "name" => "B",
                "国語" => 76,
                "数学" => 72,
                "社会" => 65,
                "理科" => 77,
                "英語" => 80,
            ],
            "C" => [
                "name" => "C",
                "国語" => 98,
                "数学" => 87,
                "社会" => 88,
                "理科" => 92,
                "英語" => 96,
            ],
            "D" => [
                "name" => "D",
                "国語" => 65,
                "数学" => 34,
                "社会" => 71,
                "理科" => 56,
                "英語" => 76,
            ],
            "E" => [
                "name" => "E",
                "国語" => 67,
                "数学" => 55,
                "社会" => 87,
                "理科" => 56,
                "英語" => 69,
            ],
            "F" => [
                "name" => "F",
                "国語" => 81,
                "数学" => 79,
                "社会" => 74,
                "理科" => 82,
                "英語" => 85,
            ],
        ];
        //1人1人の平均
       $avgA = round (($testScores["A"]["国語"] + $testScores["A"]["数学"] + $testScores["A"]["社会"] + $testScores["A"]["理科"] + $testScores["A"]["英語"]) / 5, 1);
       $avgB = round (($testScores["B"]["国語"] + $testScores["B"]["数学"] + $testScores["B"]["社会"] + $testScores["B"]["理科"] + $testScores["B"]["英語"]) / 5, 1);
       $avgC = round (($testScores["C"]["国語"] + $testScores["C"]["数学"] + $testScores["C"]["社会"] + $testScores["C"]["理科"] + $testScores["C"]["英語"]) / 5, 1);
       $avgD = round (($testScores["D"]["国語"] + $testScores["D"]["数学"] + $testScores["D"]["社会"] + $testScores["D"]["理科"] + $testScores["D"]["英語"]) / 5, 1);
       $avgE = round (($testScores["E"]["国語"] + $testScores["E"]["数学"] + $testScores["E"]["社会"] + $testScores["E"]["理科"] + $testScores["E"]["英語"]) / 5, 1);
       $avgF = round (($testScores["F"]["国語"] + $testScores["F"]["数学"] + $testScores["F"]["社会"] + $testScores["F"]["理科"] + $testScores["F"]["英語"]) / 5, 1);
       
       $testScores["A"]["avg"] = $avgA;
       $testScores["B"]["avg"] = $avgB;
       $testScores["C"]["avg"] = $avgC;
       $testScores["D"]["avg"] = $avgD;
       $testScores["E"]["avg"] = $avgE;
       $testScores["F"]["avg"] = $avgF;
       
       //教科ごとの平均
       $sumJpn = 0;
       $sumMath = 0;
       $sumSs = 0;
       $sumSci = 0;
       $sumEng = 0;
       foreach($testScores as $name => $score){
            $sumJpn = $sumJpn + $score["国語"];  
        };
        foreach($testScores as $name => $score){
            $sumMath = $sumMath + $score["数学"];  
        };
        foreach($testScores as $name => $score){
            $sumSs = $sumSs + $score["社会"];  
        };
        foreach($testScores as $name => $score){
            $sumSci = $sumSci + $score["理科"];  
        };
        foreach($testScores as $name => $score){
            $sumEng = $sumEng + $score["英語"];  
        };
        $testScores ["平均"] = [
            "name" => "平均",
            "国語" => round ($sumJpn / 6, 1),
            "数学" => round ($sumMath / 6, 1),
            "社会" => round ($sumSs / 6, 1),
            "理科" => round ($sumSci / 6, 1),
            "英語" => round ($sumEng / 6, 1),
            "avg" => round(($avgA + $avgB + $avgC + $avgD + $avgE + $avgF) / 6, 1),
        ];
    ?>
    <table border = 1>
    　　<tr>
            <th> 名前 </th>
            <th> 国語 </th>
            <th> 数学 </th>
            <th> 社会 </th>
            <th> 理科 </th>
            <th> 英語 </th>
            <th> 平均 </th>
        </tr>
        <?php foreach($testScores as $row){ ?>
            <?php foreach($row as $cel){ ?>
                <td><?= $cel?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>