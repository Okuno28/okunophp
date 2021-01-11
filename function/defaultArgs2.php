<?php //URL : http://localhost/okunophp/function/defaultArgs2.php ?>
<?php
    function concatenate(string $firstName, string $lastName, string $space = ""): string
    {
        return $lastName.$space.$firstName;
    }

    $lastName = "山田";
    $firstName = "太郎";
    $name1 = concatenate($firstName, $lastName, " ");
    echo("半角スペースで結合：".$name1);
    $name2 = concatenate($firstName, $lastName);
    echo("<br>スペースなしで結合：".$name2);
?>