<?php //URL : http://localhost/okunophp/function/variableLengthArgs.php ?>
<?php
    function concatenate(string ...$name): string
    {
        $concatenatedName = "";
        for($i = 0; $i < count($name); $i++){
            $concatenatedName .= $name[$i];
            if($i != count($name) - 1){
                $concatenatedName .= "・";
            }
        }
        return $concatenatedName;
    }

    $lastName ="山田";
    $firstName = "太郎";
    $name1 = concatenate($firstName, $lastName);
    echo("結合結果：".$name1);
    $picasso = concatenate("パブロ", "ディエゴ", "ホセ", "フランシスコ", "デ", "パウラ", "ファン", "ネポムセーノ", "マリア", "デ", "ロス", "レメディオス", "シプリアノ", "デ", "ラ", "サンティシマ", "トリニダード", "ルイス", "ピカソ" );
    echo("<br>ピカソの本名：".$picasso);
?>