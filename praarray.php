<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        border-collapse: collapse; /* 讓邊框合併成一條 */
    }
    th, td {
        border: 1px solid black; /* 邊框樣式、顏色和寬度 */
        padding: 8px; /* 增加內邊距讓文字不會貼邊 */
        text-align: center; /* 讓文字置中 */
    }
</style>
</head>
<body>
<h2>利用程式來產生陣列</h2>

<!-- ul>li* -->
 <ul>
    <li>以迴圈的方式產生一個九九乘法表</li>
    <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
    <li>再以迴圈方式將陣列內容印出</li>
</ul>

<h3>方法一：加入變數counter</h3>
<?php

$nine=[];

for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) { 
        $nine[]="$i x $j = ".($i*$j);
    } 
}
// echo "<pre>";
// print_r($nine);
// echo "</pre>";
$counter=0;
foreach($nine as $n){
    $counter++;
    if ($counter==9) {
        echo "<br>";
        $counter=0;
        // 第九個，加完換行之後歸零
    }else{
        echo $n . ","; 
    }
}
?>
<h3>方法二：索引%9，餘數=8</h3>
<?php

$nine=[];

for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) { 
        $nine[]="$i x $j = ".($i*$j);
    } 
}

foreach($nine as $idx => $n){

    if ($idx%9==8) {
        echo "<br>";
    }else{
        echo $n . ","; 
    }
}

?>
<h3>方法三：(索引+1)%9，餘數=0</h3>
<?php

$nine=[];

for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) { 
        $nine[]="$i x $j = ".($i*$j);
    } 
}

foreach($nine as $idx => $n){

    if (($idx+1)%9==0) {
        echo "<br>";
    }else{
        echo $n . ","; 
    }
}
?>

<h3>九九乘法表陣列放入表格中</h3>

<?php

$nine=[];
for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) { 
        $nine[]= " $j x $i = ".($i*$j) ;
    } 
}

echo "<table>";
foreach($nine as $idx => $n){
    if ($idx % 9 == 0) {
        echo "<tr>";
    }
    if ($idx%9==8) {
        echo "</tr>";
        
    }else{
        echo "<td>$n</td>"; 
    }
}
echo "</table>";

?>
</table>
<hr>
<h3>九九乘法表的值放入表格中</h3>

<?php

$nine=[];
for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) { 
        $nine[]= ($i*$j) ;
    } 
}
echo "<table>";
foreach($nine as $idx => $n){
    $v=explode("=",$n)[0];
    if($idx%9==8){
        echo "<td>$v</td></tr>";

    }else if($idx%9==0){
        echo "<tr><td>$v</td>";

    }else{
        echo "<td>$v</td>";
    }
}
echo "</table>";

?>
<h3>九九乘法表的值放入表格中-提高表意</h3>

<?php

$nine=[];
for ($i=1;$i<=9;$i++) {
    for ($j=1;$j<=9;$j++) { 
        $nine[]= ($i*$j) ;
    } 
}
echo "<table>";
foreach($nine as $idx => $result){

    if($idx%9==0){
        echo "<tr>";
        echo"<td>$result</td>";

    }else{
        echo "<td>$result</td>";
    }
    if($idx%9==8){
        echo "</tr>";
    }
}
echo "</table>";
?>
<h2>練習-九九乘法表二維陣列</h2>

<?php
$nine3=[];
for ($i=1; $i <= 9 ; $i++) {
    for ($j=1;$j<=9;$j++){
        $nine3[]=[
            'formula' => " $j x $i ",
            'value' => $i*$j
        ];
    }
}
// echo "<pre>";
// print_r($nine3);
// echo "</pre>"
foreach ($nine3 as $idx => $item) {
    if($idx%9==8){
        echo $item['formula']."=".$item['value']."<br>";
    }else{
        echo $item['formula']."=".$item['value'];
    }

}
?>
</table>
</body>
</html>