

<nav class="navbar navbar-expand navbar-light bg-info">
  <a class="navbar-brand" href="#">PHP</a>
<?php
$menuItems = array (
  array("/libelingstier.php", "Formular"),
  array("/lieblingstierResult.php", "Ergebnis"),
  array("/lieblingsfarbe.php", "Kübel")
  );
  foreach ($menuItems as $item) {
    echo "<a href='$item[0]'>$item[1]</a>&nbsp;&nbsp;&nbsp;";
  }
?>
</nav>
