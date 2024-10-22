<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
    <li>使用亂數函式rand(𝑎,b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>
<p>
產生過的放到陣列，下一次如果重複就再重新產生<br>
產生亂數放到陣列<br>
1.迴圈什麼時候結束，停下來的條件(數字)數到第五次<br>
2.用哪個函式或方式來檢查有重複的，php是哪個內建函式in_array<br>

<h2>威力彩方法一：迴圈</h2>
<?php
$nums=[];

while(count($nums)<6){
    $n=rand(1,38);
    
    if(!in_array($n,$nums)){
        $nums[]=$n;
    }
}
sort($nums);
foreach($nums as $num){    
    echo "$num, ";
}

?>

<h2>威力彩方法二：函式join(,)</h2>
<?php
$nums=[];

while(count($nums)<6){
    $n=rand(1,38);
    
    if(!in_array($n,$nums)){
        $nums[]=$n;
    }
}
sort($nums);
echo "威力彩號碼：" . join("," ,$nums);
?>

<h2>找出五百年內的閏年</h2>

<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>
<?php
$leap=[];

for ($i=2024; $i <=2524 ; $i++) { 
    if($i%4==0 && ($i%100!=0 || $i%400==0)){
        $leap[]=$i;
    }
}

echo "<pre>";
print_r($leap);
echo "</pre>";

?>
<h2>
已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
<ul>
<li>天干：甲乙丙丁戊己庚辛壬癸</li>
<li>地支：子丑寅卯辰巳午未申酉戌亥</li>
<li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>
<h2>天干地支表</h2>
<?php
$sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];

$sl=[];
echo "<table>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<10;$j++){
        $cellnum=10*$i+$j;
        $landIndex=$cellnum%12;
        echo "<td>";
        echo $sky[$j];
        echo $land[$landIndex];
        echo "<td>";
    }
    echo "</tr>";
}
echo "</table>";

// echo "<pre>";
// print_r($sl);
// echo "</pre>";
?>
<h2>天干地支迴圈</h2>
<?php
$sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];

$sl=[];

for($i=0;$i<6;$i++){

    for($j=0;$j<10;$j++){
        $cellnum=10*$i+$j;
        $landIndex=$cellnum%12;
        $sl[]=$sky[$j].$land[$landIndex];
    }
}
$year=2024;
echo "西元" . $year . "年是" . $sl[($year-4)%60] . "年";




// $year=2058;
// $baseYear = 1024;

// $gan = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];

// $zhi = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

// $ganIndex = ($year-$baseYear) % 10;
// $zhiIndex = ($year-$baseYear) % 12;
// echo "西元 " . $year . " 年的天干地支是：" . $gan[$ganIndex] . $zhi[$zhiIndex];

// foreach ($gan as $key => $value) {
//     foreach ($zhi as $key => $value) {
//         echo
        
//     }
//     # code...
// }
?>

&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;

</body>
</html>