<?php
$exerciseNb = 3;
include '../header.php';
$km = 1;
?>
<p>
  Je viens de parcourir <?= $km ?> kilomètre.
</p>
<?php
$km = $km * 3;
?>
<p>
  D'ici une trentaine de minutes, je devrais avoir parcouru <?= $km ?> kilomètres.
</p>
<?php
$km = $km + 122;
?>
<p>
  D'ici quelques jours, si je n'ai pas eu envie de m'arracher les jambes avec une pince monseigneur rouillée, je devrais avoir atteint les <?= $km ?> kilomètres.
</p>
<?php
include '../footer.php';
?>
