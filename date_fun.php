<h5>系統時區設定</h5>
date_default_timezone_set()
<?php
date_default_timezone_set("Asia/Taipei");
?>

<h1>日期函式</h1>
<h4>date()</h4>
<?php
echo date("Y-m-d");
echo "<br>";
echo date("y-m-d");
echo "<br>";
echo date("Y-M-d");
echo "<br>";
echo date("Y-m-D");
?>

<h4>strtotime()</h4>
<?php
echo strtotime("2020-10-29");
echo "<br>";
echo strtotime("2020-10-29 10:52:00");
echo "<br>";
echo strtotime("+1 days");
echo "<br>";
echo strtotime("+1 month");
echo "<br>";
echo date("Y-m-d H:i:s l",strtotime("+1 year"));

echo "<br>";

echo date("Y年m月d日",strtotime("2020-10-29 +3 days")); /* 不含10-29當日 */

?>