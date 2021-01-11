<?php //URL : http://localhost/okunophp/function/callbackFunction.php ?>
<?php
    function concatenateSpace(string $firstName, string $lastName): string
    {
        return $lastName." ".$firstName;
    }

    function useConcatenate(array $name, callable $function)
    {
        $concatName = $function(...$name);
        echo($function."関数での結合結果：".$concatName."<br>");
    }

    $nameParam = ["新三", "斎藤"];
    useConcatenate($nameParam, "concatenateSpace");
?>