<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
    <?php //URL : http://localhost/okunophp/external/taskExternal.php ?>
</head>
<body>
    <p><?php
        require("externalFunctions.php");//記載は一度でよい。
        //課題1
        calcNumber(84, 37, true);
        calcNumber(84, 37, false);
    ?></p>
    
    <p><?php
        //課題2
        $mumei(84, true);
        $mumei(37, false);
    ?></p>

    <p><?php
        //課題3
        //各科目の平均点
        $averageScore = [
            'nationalLanguage' => 63,
            'math' => 67,
            'society' => 71,
            'science' => 68,
            'english' => 66,
        ];
        //Aくんの点数
        $AScore = [
            'nationalLanguage' => 76,
            'math' => 72,
            'society' => 65,
            'science' => 68,
            'english' => 80,
        ];
        //各科目名
        $subjectTitle = [
            'nationalLanguage' => '国語',
            'math' => '数学',
            'society' => '社会',
            'science' => '理科',
            'english' => '英語',
        ];
    //課題3-1
    echo("全科目の平均点は" . calcAverage($averageScore) . "点です。<br>"); 
    echo("Aくんの平均点は" . calcAverage($AScore) . "点です。<br>"); 
   ?></p>
   <p><?php
    //課題3-2
    $difference = differenceScore($averageScore, $AScore);
    foreach($subjectTitle as $key => $jpn){
        if($AScore[$key] == $averageScore[$key]){
            echo($jpn . "は、平均点と同じです。</br>");
        }elseif($AScore[$key] > $averageScore[$key]){
            echo($jpn . "は、平均より" . $difference[$key] . "点高いです。</br>");
        }else{
            echo($jpn . "は、平均より" . $difference[$key] . "点低いです。</br>");
        }
    };
    ?></p>
</body>
</html>