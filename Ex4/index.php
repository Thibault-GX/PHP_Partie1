<?php
  $exerciseNb = 4;
  include '../header.php';
  $string = 'Bonjour';
  $int = 25;
  $float = 2.58;
  $boolean = true;
?>
<p>
  <?= $string.', mon nombre entier vaut '.$int.', mon nombre décimal vaut '.$float.' et mon booléan est '.$boolean.'.' ?>
</p>
<?php include '../footer.php';
