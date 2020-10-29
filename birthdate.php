<h1>計算距離自己下一次生日還有幾天</h1>
<?php
$today=strtotime("now");
$birthday=strtotime("2021-01-28");
echo "還有:". (($birthday-$today)/(60*60*24)) ."天";
?>

<?php
$birthday="2021-01-28";
$today=date("Y-m-d");
echo "<br>";
echo "還有:".floor((strtotime($today)-strtotime($birthday))/(60*60*24))."天";
echo "<br>";
echo "還有:".floor(abs(strtotime($today)-strtotime($birthday))/(60*60*24))."天";

if(strtotime($today)>strtotime($birthday)){
    $gap=strtotime($today)-strtotime($birthday);
}else{
    $gap=strtotime($birthday)-strtotime($today);
}

    echo "<br>".$gap/86400 ."天";

?>