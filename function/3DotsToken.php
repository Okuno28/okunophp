<?php //URL : http://localhost/okunophp/function/3DotsToken.php ?>
<?php
    function concatenate(string $firstName, string $lastName, string $space = ""): string
    {
       return $lastName.$space.$firstName; 
    }

    $nameParam1 = ["太郎", "山田", "・"];
    $name1 = concatenate(...$nameParam1);
    echo("・で結合：".$name1);
    $nameParam2 = ["太郎", "山田"];
    $name2 = concatenate(...$nameParam2);
    echo("<br>空文字で結合：".$name2);
?>