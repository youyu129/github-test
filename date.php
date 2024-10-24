<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>時間及日期處理</h1>
<h2>現在時間日期</h2>
<?php
echo date("Y-m-d H:i:s");
echo "<br>";
?>

    <h2>給定兩個日期，計算中間間隔天數</h2>
<?php
date_default_timezone_set("Asia/Taipei");


$start="2024-10-01";
$end="2024-10-30";
$startTime=strtotime($start);
echo "開始時間：".$startTime;
echo "<br>";
$endTime=strtotime($end);
echo "結束時間：" . $endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo "差距秒：" . $gap ;
echo "<br>";
$days=$gap/(60*60*24);
echo "間隔" . $days ."<br>";
// $s=86400;
// echo $s*29;
?>
<hr>

    <h2>計算距離自己下一次生日還有幾天</h2>
<?php
$start=date("Y-m-d");
$end="2024-12-09";
$startTime=strtotime($start);
echo "今日日期：".$startTime;
echo "<br>";
$endTime=strtotime($end);
echo "下次生日：" . $endTime;
echo "<br>";
$gap=$endTime-$startTime;
echo "差距：" . $gap;
echo "<br>";
$days=$gap/(60*60*24);
echo "距離下次生日還有：" . $days . "天";
echo "<br>" ;
?>
<hr>

<h2>將英文星期轉為中文</h2>
<?php
$weekString=[
'Monday'=>['min'=>"一",'short'=>"周一",'fulltext'=>"星期一"],
'Wednesday'=>['min'=>"二",'short'=>"周二",'fulltext'=>"星期二"],
'Tuesday'=>['min'=>"三",'short'=>"周三",'fulltext'=>"星期三"],
'Thursday'=>['min'=>"四",'short'=>"周四",'fulltext'=>"星期四"],
'Friday'=>['min'=>"五",'short'=>"周五",'fulltext'=>"星期五"],
'Saturday'=>['min'=>"六",'short'=>"周六",'fulltext'=>"星期六"],
'Sunday'=>['min'=>"日",'short'=>"周日",'fulltext'=>"星期日"]
];

echo date("m月d日")." ".$weekString[date("l")]['fulltext'] . "<br>";
?>
<hr>
    <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php
echo date("Y/m/d") . "<br>";
echo date("m月/d日 l"). "<br>";
echo date("Y-m-d G:i:s") . "<br>";
echo date("Y-m-d H:i:s") . "<br>";

echo "今天是西元". date("Y年m月d日") ." ";
if (date("N")>5) {
    echo "假日";
}else{
    echo "上班日";
}
    
?>
<hr>

<h2>利用迴圈來計算連續五個周一的日期</h2>
<ul>
    <li>例:</li>
    <li>2021-10-04 星期一</li>
    <li>2021-10-11 星期一</li>
    <li>2021-10-18 星期一</li>
    <li>2021-10-25 星期一</li>
    <li>2021-11-01 星期一</li>
</ul>
<?php
for ($i=0 ; $i < 5 ; $i++) {
    $timestamp=strtotime("+$i weeks".date("Y-m-d")); 
    echo date("Y-m-d",$timestamp);
    echo "&nbsp";
    echo $weekString[date("l")]["fulltext"];
    echo "<br>";    
}
?>
<hr>

<h2>線上月曆製作</h2>
<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>
<style>
    table{
        border-collapse:collapse;
    }
    td{
        padding:5px 10px;
        text-align:center;
        border:1px solid #999;
    }
</style>
<table>
    <tr>
        <td></td>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php
// $d=strtotime("2024-2-5");
// echo date("m月有t天",$d);
$firstDayWeek=date("w",strtotime(date("Y-m-1")));
// echo $firstDayWeek; 10月的第一天是星期二(w=2)
for ($i=0; $i <6 ; $i++) {
    echo "<tr>"; 
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0; $j <7 ; $j++) {
    echo "<td>";
    $dayNum=$i*7 + $j+1 - $firstDayWeek;
    if($dayNum<=date("t") && $dayNum>0){
    echo $dayNum;
    }
        echo "</td>";
    }
    echo "</tr>"; 
}

?>
</table>
<hr>

</body>
</html>