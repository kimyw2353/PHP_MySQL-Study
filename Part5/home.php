<?php
  require('header.php');
?>
  <!-- page content -->
  <section>
     <h2>Welcome to the home of TLA Consulting.</h2>
     <p>Please take some time to get to know us.</p>
     <p>We specialize in serving your business needs
     and hope to hear from you soon.</p>
  </section>
<?php
    function increment($value, $amount = 1) {
        $value += $amount;
        echo $value;
    }
    //$value = 10;
    //increment($value);
    //echo $value;

    function increment_v2(&$value, $amount = 1) {
        $value += $amount;
        echo $value;
    }
    $value = 10;
    increment_v2($value);
    echo $value;

  require('footer.php');
?>

