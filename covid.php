<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  $data = json_decode($json);

  echo "<table border='1'>";
    <table border='1'><tr><td>txn_date</td><td>2021-11-26</td></tr><tr><td>new_case</td><td>6559</td></tr><tr><td>total_case</td><td>2094886</td></tr><tr><td>new_case_excludeabroad</td><td>6520</td></tr><tr><td>total_case_excludeabroad</td><td>2088106</td></tr><tr><td>new_death</td><td>64</td></tr><tr><td>total_death</td><td>20645</td></tr><tr><td>new_recovered</td><td>6875</td></tr><tr><td>total_recovered</td><td>1994183</td></tr><tr><td>update_date</td><td>2021-11-26 07:32:54</td></tr></table>

  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }

  echo "</table>";
?>
