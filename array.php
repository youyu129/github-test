<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:6px 10px;
        text-align: center;
        border:1px solid #ccc;
    }
</style>
<body>
    <h2>陣列宣告</h2>
    <h3>建立學生成績表</h3>
<?php

/* foreach($array as $idx => $value){
    echo "index => ". $idx .": value =>".$value;
    echo "<br>";
}
foreach($array2 as $key => $value){
    echo "index => ". $key .": value =>".$value;
    echo "<br>";
}
 */

?>


<h2>方法一：1個header迴圈+每位學生1個迴圈</h2>
<br><br>

<?php
$header=['', '國文', '英文', '數學', '地理', '歷史'];
$judy=['judy',95,64,70,90,84];
$amo=['amo',88,78,54,81,71];
$john=['john',45,60,68,70,62];
$peter=['peter',59,32,77,54,42];
$hebe=['hebe',71,62,80,62,64];
?>
<table>    
    <tr>
        <?php
    foreach($header as $value){
        echo "<td>{$value}</td>";
    }
?>
    </tr>
    <tr>
        <?php
    foreach($judy as $value){
    echo "<td>{$value}</td>";
}
?>
    </tr>
    <tr>
        <?php
    foreach($amo as $value){
    echo "<td>{$value}</td>";
}
?>
    </tr>
    <tr>
        <?php
    foreach($john as $value){
    echo "<td>{$value}</td>";
}
?>
    </tr>
    <tr>
        <?php
    foreach($peter as $value){
    echo "<td>{$value}</td>";
}
?>
    </tr>
    <tr>
        <?php
    foreach($hebe as $value){
    echo "<td>{$value}</td>";
}
?>
    </tr>
</table>
<br><br>
<h2>方法二：1個header迴圈+1個學生迴圈</h2>
<br><br>
<?php
$header=['', '國文', '英文', '數學', '地理', '歷史'];
$students=[['judy',95,64,70,90,84],
           ['amo',88,78,54,81,71],
           ['john',45,60,68,70,62],
           ['peter',59,32,77,54,42],
           ['hebe',71,62,80,62,64]];


?>        
<table>

    <tr>
    <?php
    foreach ($header as $value) {
        echo "<td>{$value}</td>";
    }
    ?>

    </tr>
    <?php
    foreach ($students as $students) {
        echo "<tr>";
        foreach ($students as $value) {
            echo "<td>{$value}</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<br><br>
<h2>方法三：1個header迴圈+1個學生迴圈</h2>
<br><br>
<?php
$header=['', '國文', '英文', '數學', '地理', '歷史'];
$stus=['judy'=>[95,64,70,90,84],
'amo'=>[88,78,54,81,71],
'john'=>[45,60,68,70,62],
'peter'=>[59,32,77,54,42],
'hebe'=>[71,62,80,62,64]];

$stus2=['judy'=>[
    '國文'=>95,
    '英文'=>64,
    '數學'=>70,
    '地理'=>90,
    '歷史'=>84],
'amo'=>[
    '國文'=>88,
    '英文'=>78,
    '數學'=>54,
    '地理'=>81,
    '歷史'=>71],
'john'=>[
    '國文'=>45,
    '英文'=>60,
    '數學'=>68,
    '地理'=>70,
    '歷史'=>62],
'peter'=>[
    '國文'=>45,
    '英文'=>60,
    '數學'=>68,
    '地理'=>70,
    '歷史'=>62],
'hebe'=>[
    '國文'=>45,
    '英文'=>60,
    '數學'=>68,
    '地理'=>70,
    '歷史'=>62]];

?>
<table>
    <tr>
        <?php
    foreach ($header as $value) {
        echo "<td>{$value}</td>";
    }
    ?>
    </tr>
    <?php
    foreach ($stus as $name => $student) {
        echo "<tr>";
        echo "<td>";
        echo $name;
        echo "</td>";
        foreach ($student as $score) {
            echo "<td>{$score}</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<hr>
<?php 
$tmp=$stus2;
echo "<pre>";
print_r($stus2);
echo "</pre>";
$keys=array_keys($stus2);
$first=array_shift($stus2);
$header=array_keys($first);
array_unshift($header,'學生');

$nstu=array_merge([$first],array_values($stus2));

echo "<pre>";
echo "nstu<br>";
print_r($nstu);
echo "</pre>";
echo "<pre>";
print_r($keys);
echo "</pre>";
echo "<pre>";
print_r($header);
echo "</pre>";
//echo $key;
//$stus2[$key]=$first;
?>

<?php
$tt=[];
foreach($keys as $idx => $name){
    $tt[$name]=$nstu[$idx];
}

echo "<pre>";
echo "tt<br>";
print_r($tt);
echo "</pre>";
?>
<br><br>
<h2>方法四：設定變數，方便修改</h2>
<br><br>
<table>
    <tr>
        <?php
    foreach($header as $value){   
        echo "<td>{$value}</td>";
    }
?>  
    </tr>
    <?php
    foreach($tt as $name => $student){
        echo "<tr>";
        echo "<td>";
        echo $name;
        echo "</td>";
        foreach($student as $score){
            echo "<td>{$score}</td>";
        }   
        echo "</tr>";
    }
    ?>
    <hr>

</body>
</html>