<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>月曆</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <style>
  body{
    text-align:center;
  }
  table{
    width:500px;
    margin:auto;
  }
  table,
  td{
    border:1px solid #ccc;
    padding: 10px 0;
  }
  table,
  td:hover{
    backbround:lightblue;
  }

  </style>
</head>
<body>
<h1>月曆</h1>
<table>
<tr></tr>
  <td>日</td>
  <td>一</td>
  <td>二</td>
  <td>三</td>
  <td>四</td>
  <td>五</td>
  <td>六</td>
</tr>

<?php
$thisMonth=date("m");
echo "本月是".$thisMonth;
echo "<br>";
$monthDays=date("t");
echo "本月天數".$monthDays;
echo "<br>";
$firstDate=strtotime(date("Y-m").'1');
// echo $firstDate; 格式會有誤
// $startDayWeek=date('W',date("Y-m".'1'));
$startDayWeek=date('w',$firstDate);
echo "第一天星期" . $startDayWeek;
echo "<br>";
?>

<?php
for($i=0; $i<6;$i++){
  echo "<tr>";
  for($j=0;$j<7;$j++){

      echo "<td>";
      if($i==0 && $j<$startDayWeek){
          echo "&nbsp;";
      }else if((($i*7) + ($j+1) - $startDayWeek)>$monthDays){

      }else{
          echo (($i*7) + ($j+1) - $startDayWeek);
      }        
      echo "</td>";
  }
  echo "</tr>";
}


?>
</table>
</body>
</html>