<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='2'>";
    <?php
        for($i=0;$i<10;$i++){
          echo "<tr>";
          echo "<td>json_decode($json)</td>";
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
