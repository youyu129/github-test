<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎+github 操作練習</title>
</head>
<body style='text-align:left'>
<?php

define("PI",3.1415);

$price=100;
echo $price;

echo "<br>";

$name='李祐瑜';
echo $name;

$total=(100*5)+(32/10*3);
echo $total;

echo "<br>";
$num=rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49);
echo $num;

echo "<br>";
echo "圓周率是".PI;
?>

<h1>練習<h1>
<pre>


<?php

$a=10;
$b=50;
$tmp=$a;

$a=$b;
$b=$tmp;

echo $a;
echo "<br>";
echo $b;

unset($tpm);

?>

</body>
</html>