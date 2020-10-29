<h1>字串常用函式</h1>
<h3>substr/mb_substr</h3>
<?php

$str="Lorem ipsum dolor sit, amet 
consectetur adipisicing elit. Blanditiis 
esse autem enim earum quisquam fugit aut
soluta vel, rem, a sapiente nam nemo officia 
maxime asperiores sit expedita delectus nobis.";
echo "<br>";

$substr=mb_substr($str,40,11);
//第一個數字:起始值，第二個:算n個字串，空白字串也算入

echo $substr;

echo "<br>";

// $substr_from_tail=mb_substr($str,-1,10);
// 從-1開始往後算沒東西，只抓到一個字串即.

$substr_from_tail=mb_substr($str,-10,10);

echo $substr_from_tail;

?>

<h1>去頭尾&空白</h1>
<h3>trim()</h3>
<p>ltrim() - Strip whitespace (or other characters) from the beginning of a string
rtrim() - Strip whitespace (or other characters) from the end of a string
str_replace() - Replace all occurrences of the search string with the replacement string</p>;

<h1>重複字元</h1>
<h3>str_repeat()</h3>
<?php
echo str_repeat('money',20);
echo "<br>";
echo str_repeat('*',20);
?>

<h1>字串取代</h1>
<h3>str_replace</h3>
<?php

$str_replace='BIG MONEY';

$result=str_replace('Lorem',$str_replace,$str);
// to replace "Lorem" with "$str_replace" in "$str";
//原目標大小寫要一致

echo $str;
echo "<br>";
echo $result;

?>

<h1>字串分割</h1>
<h3>explode()</h3>
<?php

$str_array=explode(' ',$str);
//從空白開始分段，回傳為陣列，要用print
echo "<pre>";
print_r($str_array);
echo "</pre>";
?>

<h1>尋找字串位置</h1>
<h3>strpos()</h3>
<?php
$target='nobis';

echo strpos($str,$target);
?>

<h1>字串長度</h1>
<h3>strpos()</h3>
<?php
$mb_str='Hii.今天天氣不錯*-*';

echo strlen($mb_str); /* 中文算3個字元 */
echo "<br>";
echo mb_strlen($mb_str); /* 中文只算1個字元 */
echo "<br>";

echo substr($mb_str,0,6); /* ˊ中文變亂碼 */
echo "<br>";
echo mb_substr($mb_str,0,6); /* 正常 */

?>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>