<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>使用for迴圈來產生以下的數列</h1>
<?php
echo "<br>1,3,5,7,9……n<br>";
$n=50;
echo 'n='.$n.'<br>';
for($i=1 ; $i<=$n ; $i=$i+2)
    echo $i . ",";
echo '<br>';

echo "<br>10,20,30,40,50,60……n<br>";
$n=50;
echo 'n='.$n.'<br>';
for($i=1 ; $i<=$n ; $i++)
    echo $i*10 .",";
echo '<br>';

echo "<br>3,5,7,11,13,17……97<br>";
$n=100;
$count=0;
echo 'n='.$n.'<br>';
for($i=3 ; $i<$n ; $i++){
    $t=true;
    for($j=2;$j<=(sqrt($i));$j++){
        if($i%$j==0){
            $t=false;
            break;
        }
        $count++;
    }
    if($t==true){
        echo $i .',';
    }
}
echo "<br>count=".$count;
echo '<br>';
?>
<hr>
<h1>以表格排列的九九乘法表</h1>
<?php
echo "<table border=1>";
for($i=1 ; $i<=9 ; $i++){
    echo " <tr>";
    for($j=1 ; $j<=9 ; $j++){
        echo "<td>$j x $i=".($i*$j).'</td>';
    }
    echo " </tr>";
}

?>
<hr>
<h1>以交叉計算結果呈現的九九乘法表</h1>
<?php
echo "<table border=1 class='nine'>";
echo "<tr>";
echo "<th> </th>";
for($k=1 ; $k<=9 ; $k++){
    echo "<th>".$k."</th>";
}

echo "</tr>";

for($i=1 ; $i<=9 ; $i++){
    echo "<tr>";
    echo "<th>".$i."</th>";
    for($j=1 ; $j<=9 ; $j++){
        echo "<td>".($i*$j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

<hr>
<h1>以交叉計算結果呈現的九九乘法表-顏色</h1>
<style>
.nine{
    border-collapse:collapse;
    margin:20px;
}
.nine td{
    border:1px solid #af3;
    width:30px;
    height:30px;
    text-align: center;
}
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    color:white;
}

</style>
<?php

echo "<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0 ; $i<=9 ; $i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }elseif($j==0){
            echo $i;
        }elseif($i==0){
            echo $j;
        }else{
            echo ($j*$i);
        }
            echo "</td>";
    }
    echo"</tr>";
}
echo "</table>";

?>

<h1>以交叉計算結果呈現的九九乘法表-縮減一半</h1>
<style>
.nine{
    border-collapse:collapse;
    margin:20px;
}
.nine td{
    border:1px solid #251f86;
    width:30px;
    height:30px;
    text-align: center;
}
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:#9b96e7;
    color:white;
}

</style>
<?php

echo "<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0 ; $i<=9 ; $i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }elseif($j==0){
            echo $i;
        }elseif($i==0){
            echo $j;
        }elseif($j>=$i){
            echo ($j*$i);
        }
            echo "</td>";
    }
    echo"</tr>";
}
echo "</table>";

?>
</body>
</html>