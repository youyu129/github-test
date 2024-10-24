<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>字串處理練習</h1>
<h2>字串取代</h2>
<li>將”aaddw1123”改成”*********”</li>
<h3>方法一：str_replace，缺點：要知道原本的字串內容</h3>
<?php
$str="aaddw1123";
$str=str_replace(['a','d','w','1','2','3'],"*",$str);
echo $str . "<br>"; 
?>
<h3>方法二：str_repeat</h3>
<?php
$str="aaddw1123";
$str=str_repeat("*",mb_strlen($str));
echo $str . "<br>"; 
?>

<hr>

<h2>字串分割</h2>

<li>將”this,is,a,book”依”,”切割後成為陣列</li>

<?php
$str="this,is,a,book";
$str=explode(",",$str);
echo "<pre>";
print_r($str); 
echo "</pre>";
?>

<hr>

<h2>字串組合</h2>
<li>將上例陣列重新組合成“this is a book”</li>
<?php
$str=['this','is','a','book'];
$str=join(" ",$str);
echo $str . "<br>";  
  ?>

<hr>

<h2>子字串取用</h2>
<li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
尋找字串與HTML、css整合應用</li>

<?php
$str="The reason why a great man is great is that he resolves to be a great man";
$str=substr($str,0,10)."...";
echo $str . "<br>";
?>

<h2>子字串取用-中文</h2>
<li>將”一個偉人的偉大之所以存在，是因為他下定決心要成為一個偉人。”只取前十字成為” 一個偉人的偉大之所以…”</li>

<?php
$str="一個偉人的偉大之所以存在，是因為他下定決心要成為一個偉人。";
$str=mb_substr($str,0,10)."...";
echo $str . "<br>";
?>

<h2>給定一個句子，將指定的關鍵字放大</h2>
<li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”
請將上句中的 “程式設計” 放大字型或變色.</li>  
<?php
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$key="程式設計";
$large="<span style=font-size:28px;color:blue>".$key."</span>";
$str=str_replace($key,$large,$str);
echo $str;
  ?>
  


</body>
</html>