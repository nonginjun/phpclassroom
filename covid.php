<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='2'>";
    <?php
        for($i=0;$i<10;$i++){
          echo "<tr>";
          echo "<td>txn_date:2021-11-26</td>";
          echo "<td>new_case:6559</td>";
          echo "<td>total_case:2094886</td>";
          echo "<td>new_case_excludeabroad:6520</td>";
          echo "<td>total_case_excludeabroad:2088106</td>";
          echo "<td>new_death:64</td>";
          echo "<td>total_death:20645</td>";
          echo "<td>new_recovered:6875</td>";
          echo "<td>total_recovered:1994183</td>";
          echo "<td>update_date:2021-11-26 07:32:54</td>";
          echo "</tr>";
          }
        ?>
    </table>
  </body>
</html>
  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }

  echo "</table>";
?>
