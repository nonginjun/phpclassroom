<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='1'>";
    
          echo "<tr>";
          echo "<td>";
          echo $key;$json;
          echo "</td>";
          echo "</tr>";
          
  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }

  echo "</table>";
?>
