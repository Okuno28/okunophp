<?php //URL : http://localhost/okunophp/function/variableFunction.php ?>
<?php
    function concatenateSpace(string $firstName, string $lastName): string
    {
        return $lastName." ".$firstName;
    }

    function concatenateDot(string $firstName, string $lastName): string
    {
        return $lastName."・".$firstName;
    }

    $lastName ="山田";
    $firstName = "太郎";
    $functionNameList = ["concatenateSpace", "concatenateDot"];
    foreach($functionNameList as $functionName){
        $name = $functionName($firstName, $lastName);
        echo($functionName."関数での結合結果：".$name."<br>");
    }
?>