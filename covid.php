<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='10'>";
    <?php
        for($i=0;$i<2;$i++){
          echo "<tr>";
          echo "<td>$json</td>";
          echo $key;
          echo "<td>$data</td>";
          echo "</tr>";
           }       
     
  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }

  echo "</table>";
?>
