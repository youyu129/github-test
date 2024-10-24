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

    <h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)計算距離自己下一次生日還有幾天</li>
</ul>
<?php
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
?>
<hr>

<h2>線上月曆製作</h2>
<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>
<?php
?>
<hr>

</body>
</html>