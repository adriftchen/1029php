<h1>將”aaddw1123”改成”*********”</h1>

<?php
echo str_repeat("*",mb_strlen('aaddw1123'));
?>

<br>

<?php
$str='aaddw1123';
$str_replace='*';
$result=str_replace('aaddw1123','*',$str);
echo $result;
//直接用str_replace()會把整段文字取代掉成一個*
?>

<br>

<?php
$str="         ";
$str_replace='*';
$result=str_replace(' ',$str_replace,$str);
echo $result;
//輸入密碼
?>

<br>

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

<br>

<h1>將”this,is,a,book”依”,”切割後成為陣列</h1>
<?php
print_r(explode(',','this,is,a,book'));
?>

<br>

<h1>將上例陣列重新組合成“this is a book”</h1>
<?php

echo implode(" ",explode(',','this,is,a,book'));

?>

<h1>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h1>
<?php
echo mb_substr('The reason why a great man is great is that he resolves to be a great man',0,10). '...';
?>