<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssociativeArray</title>
    <?php //URL : http://localhost/okunophp/taskAssociativeArray/taskAssociativeArray.php ?>
</head>
<body>
    <?php 
        $test = [
            "A" => [
                "kokugo" => 85,
                "math" => 64,
                "ss" => 45,
                "sci" => 77,
                "eng" => 80,
            ],
            "B" => [
                "kokugo" => 56,
                "math" => 89,
                "ss" => 73,
                "sci" => 85,
                "eng" => 78,
            ],
            "C" => [
                "kokugo" => 98,
                "math" => 87,
                "ss" => 88,
                "sci" => 92,
                "eng" => 96,
            ],
        ];

        $avgA = array_sum($test["A"]) / count($test["A"]);
        $avgC = array_sum($test["C"]) / count($test["C"]);
        $avgMath = array_sum(array_column($test, "math")) / count(array_column($test, "math")); 
    ?>
    <p><?php echo('A君の理科の点数は' . $test["A"]["sci"] . 'です。'); ?></p>
    <p><?php echo('B君の英語の点数は' . $test["B"]["eng"] . 'です。'); ?></p>
    <p><?php echo('A君の平均点は' . $avgA . 'です。'); ?></p>
    <p><?php echo('C君の平均点は' . $avgC . 'です。'); ?></p>
    <p><?php echo('3人の数学の平均点は' . $avgMath . 'です。'); ?></p>
</body>
</html>