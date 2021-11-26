<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='1'>";
        
      

  foreach ( $data[0] as $key => $val ){
   echo $key.":".$val."<br>";
    for($i=0;$i<100;$i++){
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo $val;
        echo "</td>";
        echo "</tr>";
  }

  echo "</table>";
?>
