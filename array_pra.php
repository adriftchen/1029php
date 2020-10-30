<h1>找出五百年內的閏年</h1>
<?php
$year=date("Y");
$array=[];

for($i=0;$i<500;$i++){

    if(($year+$i)%4 == 0 && (($year+$i)%100 != 0  || (($year+$i)%400==0 && ($year+$i) % 3200 !=0))){

        $array[]=$year+$i;
        
    }   
}

echo "五百年內的閏年:<br>";
foreach($array as $year){
    echo $year ."<br>";
}

echo "一共有".count($array)."個閏年";

?>

<h1>已知西元1024年為甲子年，提供一個西元年份，輸出天干地支的年別</h1>
<?php
$a=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$b=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$year=1085;
echo $year,"年是",$a[abs(($year-1024)%10)],$b[abs(($year-1024)%12)],"年";
?>

<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$match=[];
for($i=0;$i<60;$i++){
    $match[1024+$i]=$sky[$i%10] . $land[$i%12];
}
print_r($match);
echo "<br>";
echo count($match);
echo "<br>";
echo $match[1077];

?>

<!-- <?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$match=[];
foreach($sky as $i=> $s){

    foreach($land as $j=> $l){
        $match[1024+($i*10+$j)]=$s.$l;
    }

}

print_r($match);
echo $match[1096];


?> -->
<h1>在不產生新陣列的狀況，將一個陣列的元素順序反向</h1>
<?php
$a=[2,4,6,1,8];
echo"原陣列:";
echo"<pre>";
print_r($a);
echo"</pre>";

for($i=0;$i<ceil(count($a)/2);$i++){
  $tmp;
  $tmp=$a[$i];
  $a[$i]=$a[count($a)-1-$i];
  $a[count($a)-1-$i]=$tmp;
}
echo"反序後新陣列";
echo"<pre>";
print_r($a);
echo"</pre>";

echo"<pre>";
print_r(array_reverse($a));
echo"</pre>";

?>