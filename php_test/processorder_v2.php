<?php 
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2> 
    <?php
    echo "<p>Order processed at ".date('H:i, jS F Y'). "</p>";
    echo htmlspecialchars($tireqty).' tires<br />';
    echo htmlspecialchars($oilqty).' bottle of oil<br />';
    echo htmlspecialchars($sparkqty).' spark plugs<br />';

    echo "$tireqty tires<br />"; // 2 tires 출력
    echo '$tireqty tires<br />'; // $tireqty tires 출력
    ?>  
  </body>
</html>
