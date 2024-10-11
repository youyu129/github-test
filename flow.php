<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hi>流程-if-else<h1>

<?php
$score=75;
if($score>=60){
    //判斷式為'真'時執行這個區段的程式碼
    echo "及格";
}else{
    //判斷是為'假'時執行這個區段的程式碼
    echo "不及格";
}

?>

<h1>流程-swith...case</h1>

<?php

$level='B';
switch($level){//注意條件公式必須要能產生一個明確的值
    case "A": //注意case 只能放明確的值，不能放公式或條件式
        echo "表現優良，請繼續保持";
    break; //依需要決定是否要加break;如果不加break;則case 'A' 執行完畢後會接著執行case 'B'
    case "B":
        echo "值得肯定，還有進步空間";
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
    //以上之外的
    //條件公式的結果不在case 中時會執行default語句後的程式碼，
    //如果不加default，則表示沒有符合的case 時，結束這個switch的執行
        echo "是否無心學業";
    break;

}


?>

<h1>三元運算子</h1>

<?php

$score=55;
echo ($score>=60)?"及格":"不及格";

?>

<h1>for loop</h1>
//for(起始值;讓迴圈進行的條件式;遞增/減值){
//要重覆執行的程式碼
}


</body>
</html>