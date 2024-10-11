<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>分配成績等級</h2>
<h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>

<ul>
    <li>0 ~ 59 => E</li>
    <li>60 ~ 69 => D</li>
    <li>70 ~ 79 => C</li>
    <li>80 ~ 89 => B</li>
    <li>90 ~ 100 => A</li>
</ul>

<hr> 

<?php
//原始ifelse巢狀寫法
$score=75;
$level='';
if($score<=100 && $score>=0){
    if($score>=90 && $score<=100){
        $level='A';
    }else{
        if($score>=80 && $score <=90){
            $level="B";
        }else{
            if($score>=70 && $score <=79){
                $level="C";
            }else{
                if($score >=60 && $score <=69){
                    $level="E";
                }
            }
        }
    }
    echo "score=".$score;
    echo "<br> 你的等級為".$level;
    echo "<br>";
    
}else{
    echo "score=".$score;
    echo "成績應該在0~100之間";
    echo "<br>";
}

?>

<hr>

<?php
//縮減寫法,還是巢狀迴圈
$score=75;
$level='';
if($score<=100 && $score>=0){
    if($score>=90 && $score<=100){
        $level='A';
    }elseif($score>=80 && $score <=90){
            $level="B";
    }elseif($score>=70 && $score <=79){
                $level="C";
    }elseif($score >=60 && $score <=69){
                    $level="E";
    }
    echo "score=".$score;
    echo "<br> 你的等級為".$level;
    echo "<br>";
    
}else{
    echo "score=".$score;
    echo "成績應該在0~100之間";
    echo "<br>";
}

?>

<hr>

<?php
//再縮減寫法,還是巢狀迴圈
$score=75;
$level='';
if($score<=100 && $score>=0){
    if($score>=90){
        $level='A';
    }elseif($score>=80){
        $level="B";
    }elseif($score>=70){
        $level="C";
    }elseif($score>=60){
        $level="D";
    }else{
        $level="E";
    }
    echo "score=".$score;
    echo "<br> 你的等級為".$level;
    echo "<br>";
    
}else{
    echo "score=".$score;
    echo "成績應該在0~100之間";
    echo "<br>";
}

// 顯示評語
echo "<br>";
switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    case "E":
        echo "是否無心學業";
    break;
    
    
}
?>

<hr>
<?php
//chatGPT
$score=60;
if ($score < 0 || $score > 100) {
    echo "成績無效"; // 確保成績在合法範圍內
    } elseif ($score < 60) {
        echo 'E';
    } elseif ($score < 70) {
        echo 'D';
    } elseif ($score < 80) {
        echo 'C';
    } elseif ($score < 90) {
        echo 'B';
    } else {
        echo 'A';
    }


?>



</body>
</html>