<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }

    </style>
</head>
<body>
    <h1>以 * 符號為基礎在網頁上排列出下列圖形:</h1>
<?php
echo "<br>直角三角型<br>";
for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>倒直角三角型<br>";
for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>正三角型<br>";

for($i=0;$i<5;$i++){

    for($k=0;$k<(4-$i);$k++){
    echo "&nbsp";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>倒三角型 方法1 i從0開始 改內圈<br>";

for($i=0;$i<5;$i++){

    for($k=0;$k<$i;$k++){
        echo "&nbsp";
        }
    for($j=0;$j<(2*(4-$i)+1);$j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>倒三角型 方法2 i從4開始 改外圈<br>";

for($i=4;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
    echo "&nbsp";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>菱型<br>";

echo "菱形 方法一 組合<br>";
for($i=0;$i<4;$i++){

    for($k=0;$k<(4-$i);$k++){
    echo "&nbsp";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
for($i=4;$i>=0;$i--){

    for($k=0;$k<(4-$i);$k++){
    echo "&nbsp";
    }

    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}

echo "菱形 方法二 一個迴圈<br>";
$temp=0;
for($i=1;$i<=9;$i++){
    if($i>5){
        $temp=$temp-1;
    }else{
        $temp=$i;
    }

    for($j=1;$j<=(4+$temp);$j++){
        if($j<=(5-$temp)){
            echo "&nbsp";
        }else{
            echo "*";
        }
    }
    echo "<br>";
}
?>

<?php
echo "菱形 方法三 一個迴圈 老師上課版本<br>";
 
for($i=0;$i<9;$i++){
    if($i>4){
        $k1=$i-4;
        $j1=2*($i-(2*($i-4)))+1;
    }else{
        $k1=4-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<?php
echo "<br>實心矩形<br>";
for ($i=0 ; $i < 5 ; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        echo "*";
    }echo "<br>";
}
?>

<?php
echo "<br>矩形外框<br>";
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){ 
        if($i==0 || $i==4){
            echo "*";
    }elseif($j==0 || $j==4){
        echo "*";
    }else{
        echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>

<?php
echo "<br>內含對角線的矩形<br>";
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){ 
        if($i==0 || $i==4){
            echo "*";
    }elseif($j==0 || $j==4){
        echo "*";
    }elseif($i==$j || $j==4-$i){
        echo "*";
    }else{
        echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>

<?php
echo "<br>內含對角線的矩形-先設變數<br>";
$n=12;
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){ 
        if($i==0 || $i==($n-1)){
            echo "*";
    }elseif($j==0 || $j==($n-1)){
        echo "*";
    }elseif($i==$j || $j==($n-1)-$i){
        echo "*";
    }else{
        echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>

</body>
</html>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>