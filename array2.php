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
echo "號碼：" . join("," ,$nums);
?>
</body>
</html>