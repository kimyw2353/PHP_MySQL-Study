<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
<?php
    //배열 초기화
    $products = ['tires','oil','spark plugs'];

    echo $products[0]."<br />";
    echo $products[1]."<br />";
    echo $products[2]."<br />";

    echo "<hr>";

    // 배열에 값 추가하고 변경하기
    $products[0] = 'Fuses';
    echo $products[0]."<br />";
    echo $products[1]."<br />";
    echo $products[2]."<br />";
    echo ($products[3] = 'Fuses')."<br />";

    echo "<hr>";

    //반복문에서 배열 사용하기
    $products2[0] = 'Tires';
    $products2[1] = 'oil';
    $products2[2] = 'spark plugs';

    //for
    for ($i = 0; $i < 3; $i++) {
        if ($i < 2) {
            echo $products2[$i]." / ";
        } else {
            echo $products2[$i]."<br />";
        }
    }

    //foreach
    foreach ($products2 as $current) {
        echo $current." ";
    }
    echo "<br />";
    //$current 변수에 각 요소긔 값을 차례대로 저장하고 출력한다.

    //문자열 인덱스를 갖는 배열
    $prices = array('Tires'=>100, 'Oil'=>10, 'Spark Plugs'=>4);

    $prices2 = array('Tires'=>100);
    $prices2['Oil'] = 10;
    $prices2['Spark Plugs'] = 4;

    $prices3['Tires'] = 100;
    $prices3['Oil'] = 10;
    $prices3['Spark Plugs'] = 4;

    foreach ($prices as $current) {
        echo $current." ";
    }
    echo "<br />";

    foreach ($prices2 as $current) {
        echo $current." ";
    }
    echo "<br />";

    foreach ($prices3 as $current) {
        echo $current." ";
    }
    echo "<br />";

    //문자열 배열을 반복문에서 사용
    foreach ($prices3 as $key => $value) {
        echo $key." - ".$value."<br />";
    }
    echo "<br />";

?>
</body>
</html>