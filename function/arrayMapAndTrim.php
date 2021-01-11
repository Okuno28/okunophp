<?php //URL : http://localhost/okunophp/function/arrayMapAndTrim.php ?>
<?php
    $params = [" 山田 ", " 太郎 ", " プログラマ "];
    echo("<pre>");
    var_dump($params);
    echo("</pre>");
    $trimedParams = array_map("trim", $params);
    echo("<pre>");
    var_dump($trimedParams);
    echo("</pre>");
?>