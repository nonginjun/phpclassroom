<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  echo"<H1><center>ตารางรายงานสถานการโควิด-19 แยกจังหวัด</center></H1>";
  echo "<br><br>";
  echo "<body style='background-color:#FFE4E1'>";

  echo "<center><table border='1'>";
  echo "<tr align = 'center'>";

  echo "<td bgcolor='#E6E6FA'>"; 
  echo "<b>ลำดับ</b>";
  echo "</td>"; 

  echo "<td bgcolor='#F0FFF0'.valign='middle'>"; 
  echo "<b>จังหวัด</b>";
  echo "</td>";

  echo "<td bgcolor='#FFFACD'>"; 
  echo "<b>ผู้ป่วยใหม่</b>";
  echo "</td>";

  echo "<td bgcolor='#6495ED'>"; 
  echo "<b>ผู้ป่วยรวม</b>";
  echo "</td>";

  echo "<td bgcolor='#3CB371'>"; 
  echo "<b>ผู้ป่วยใหม่ในประเทศ</b>";
  echo "</td>";
  echo "<td bgcolor='#FA8072'>"; 
  echo "<b>ผู้ป่วยรวมในประเทศ</b>";
  echo "</td>";
  echo "<td bgcolor='#87CEFA'>"; 
  echo "<b>ผู้เสียชีวิตใหม่</b>";
  echo "</td>";
  echo "<td bgcolor='#1E90FF'>"; 
  echo "<b>ผู้เสียชีวิตรวม</b>";
  echo "</td>";
  echo "<td bgcolor='#FDF5E6'>"; 
  echo "<b>วันที่อัพเดต</b>";
  echo "</td>";

  
  echo "</tr>";
  foreach($data as $key=>$val){
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#E6E6FA'>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor='#F0FFF0'>"; 
    echo $val->province;
    echo "</td>"; 
    echo "<td bgcolor='#FFFACD'>"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='#6495ED'>"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor='#3CB371'>"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#FA8072'>"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#87CEFA'>"; 
    echo $val-> new_death;
    echo "</td>";
    echo "<td bgcolor='#1E90FF'>"; 
    echo $val-> total_death;
    echo "</td>";
    echo "<td bgcolor='#FDF5E6'>"; 
    echo $val-> txn_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo"</center>";
?>

