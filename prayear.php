<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>閏年判斷，給定一個西元年份，判斷是否為閏年</h1>
    <h3>
地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。<br>
公元年分除以4不可整除，為平年。<br>
公元年分除以4可整除但除以100不可整除，為閏年。<br>
公元年分除以100可整除但除以400不可整除，為平年。<br></h2>

<?php
// %餘數 100%4==0,102%4==2
$year=2100;

echo "<br>";
echo "<h3> 原始 </h3>";

if($year%4==0){
    if($year%100==0){
        if($year%400==0){
            echo "西元";
            echo $year;
            echo "是閏年";
        }else{
            echo "西元";
            echo $year;
            echo "是平年";
        }
    }else{
        echo "西元";
        echo $year;
        echo "是閏年";
    }
}else{
    echo "西元";
    echo $year;
    echo "是平年";
}

echo "<br>";
echo "<h3> && </h3>";
if($year%4==0){
    if($year%100 == 0 && $year %400 != 0){
        echo "西元";
        echo $year;
        echo "是平年";
    }else{
        echo "西元";
        echo $year;
        echo "是閏年";
    }
}else{
    echo "西元";
    echo $year;
    echo "是平年";
}

echo "<br>";
echo "<h3> || </h3>";

if($year%4==0){
    if($year%100 != 0 || $year %400 == 0){
        echo "西元";
        echo $year;
        echo "是閏年";
    }else{
        echo "西元";
        echo $year;
        echo "是平年";
    }
}else{
    echo "西元";
    echo $year;
    echo "是平年";
}

echo "<br>";
echo "<h3> 精簡 </h3>";

if($year%4==0 && ($year%100!=0 || $year%400==0)){
    echo "西元";
    echo $year;
    echo "是閏年";
}else{
    echo "西元";
    echo $year;
    echo "是平年";
}

?>


</body>
</html>