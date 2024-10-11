<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>for loop</h1>

<?php

//for(起始值;讓迴圈進行的條件式;++遞增/--減值){
//}
    
for($i=0 ; $i<10 ; $i=$i+2){
    echo $i*10;
    echo "<br>";
}

/*起始值是0,跑到10才會停止，每次執行完i會加1
 *執行結果是i*10

 *從0開始跑,i=0,1<10,0*10=0,顯示0<br>
 *執行第二圈,i=0+1=1,1<10,1*10=10,顯示10<br>
 *依此類推
 *i=9,9*10=10,顯示90<br>
 *i=10,10不<10,X
*/

?>

<h1>while</h1>

<?php

/*
 *和for迴圈的最大不同在於while沒有明確的次數，
 *while的條件式必須要有能明確結束的語句，否則會形成無窮迴圈
 *必要時可以在把中斷的語法寫在程式碼區段中
*/

/*
 *和while的不同在於do..while不論條件式是否成立都會至少執行一次
 *注意do..while後要加上分號(;)
 */

$score=10;

while($score<60){
    $score=$score+10;
}

echo $score;
echo "<br>"

?>

<?php
//顯示執行次數
$score=10;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
}

echo $score;
echo "<br>";
echo $counter;
echo "<br>"

?>


<?php
/*
 *foreach是針對陣列或是集合物件使用的語法
 *foreach會將陣列中的元素拆成key和value兩個變數
 *如果沒有特別指定，foreach會把陣列中的元素從頭到尾都取出來一次 
 */
?>

<h1>陣列</h1>
<div>['a','b','good','sad','john',123,999]</div>

<?php

$a=['a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,'a','b','good','sad','john',123,999,];
//原始寫法
echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";
echo $a[3];
echo "<br>";
echo $a[4];
echo "<br>";
echo $a[5];
echo "<br>";
echo $a[6];
echo "<br>";
echo "<br>";

?>

<h1>foreach</h1>

<?php
//陣列+forloop迴圈
for($i=0 ; $i<count($a); $i++){
    echo $a[$i];
    echo "<br>";
}
//從0開始，第七項的索引值是6

$b=['姓名'=>"李祐瑜",'數學'=>90,'國文'=>80,'英文'=>20];

foreach($b as $key => $value){
    echo $key . ':' . $value . '<br>';
}

?>

</body>
</html>