<?php //URL : http://localhost/okunophp/function/closure.php ?>
<?php
    function useConcatenate(array $name, callable $func)
    {
        $concatName = $func(...$name);
        echo("無名関数での結合結果：" .$concatName."<br>");
    }

    $nameParam = ["太郎", "山田"];
    useConcatenate($nameParam, function(string $firstName, string $lastName): string
        {
            return $lastName." ".$firstName;
        }
    );
?>