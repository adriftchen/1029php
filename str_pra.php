<h1>將”aaddw1123”改成”*********”</h1>
<h3>sol1</h3>
<?php
$str="aaddw1123";
$str_replace='*';
$result=str_replace('a',$str_replace,$str);
echo $str;
echo"<br>";
echo $result;

$str="$result";
$str_replace='*';
$result=str_replace('d',$str_replace,$str);
echo"<br>";
echo $result;

$str="$result";
$str_replace='*';
$result=str_replace('w',$str_replace,$str);
echo"<br>";
echo $result;

$str="$result";
$str_replace='*';
$result=str_replace('1',$str_replace,$str);
echo"<br>";
echo $result;

$str="$result";
$str_replace='*';
$result=str_replace('2',$str_replace,$str);
echo"<br>";
echo $result;

$str="$result";
$str_replace='*';
$result=str_replace('3',$str_replace,$str);
echo"<br>";
echo $result;

?>
<h3>sol2</h3>
<?php
str_repeat("*",mb_strlength(aaddw1123));
?>

<h1>將”this,is,a,book”依”,”切割後成為陣列</h1>
<?php
print_r(explode(',','this is a book'));

?>

<h1>將上例陣列重新組合成“this is a book”</h1>
<?php
echo implode(" ",explode(',','this is a book'));
?>

<h1>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h1>
<?php
echo mb_substr('The reason why a great man is great is that he resolves to be a great man',0,10)
?>