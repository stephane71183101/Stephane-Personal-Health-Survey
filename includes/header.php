
<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d63384">
<div class="container-fluid">
  <a class="navbar-brand text-white" href="#">F&W Umfrage</a>
  <div class="nav justify-content-end" id="navbarNav">

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

<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d63384"> <!-- -->
    <div class="container-fluid"> <!-- -->
        <a class="navbar-brand text-white" href="#">F&W Umfrage</a> <!-- -->
        <div class="nav justify-content-end" id="navbarNav"> <!-- -->
            <form class="d-flexme-2">
                <button class="btn btn-outline-dark" type="submit">Vorige Seite</button>
                <button class="btn btn-outline-dark" type="submit">Nächste Seite</button>
            </form>
        </div>
    </div>
    </nav>
</header>

<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index">Home</a></li>                    
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</header>