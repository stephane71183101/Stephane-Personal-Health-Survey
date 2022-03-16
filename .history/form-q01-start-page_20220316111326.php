<?php include 'includes/head.php'?>

<body class="bg-info">

<?php include 'includes/header.php'?>

<!--
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d63384">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">F&W Umfrage</a>
            <div class="nav justify-content-end" id="navbarNav">
                <form class="d-flexme-2">
                    <button class="btn btn-outline-dark" type="submit">Vorige Seite</button>
                    <button class="btn btn-outline-dark" type="submit">Nächste Seite</button>
                </form>
            </div>
        </div>
        </nav>
    </header>
-->
    <div class="container-fluid pt-5 pb-3 text-center text-white">
        <div  class="container col-10">
        <p>Mit der folgenden Umfrage prüfen wir deine Ernährungsgewohnheiten und Bewegungshäufigkeiten und werden später auf dieser Basis dich besser begleiten können. Besten Dank für Deine Teilnahme!</p>
        </div>    
    </div>
        <div class="container-fluid pb-5 text-center text-white">
        <div  class="container col-10">
        <form>
        <label for="healthRange" class="form-label mb-4">Wie gesund bist du körperlich?</label>
        <div class="container-fluid px-0 mb-2 small">
        <div class="row g-0">
        <div class="col text-start">0-20%</div>
        <div class="col text-start">20-40%</div>
        <div class="col">40-60%</div>
        <div class="col text-end">60-80%</div>
        <div class="col text-end">80-100%</div>
        </div>
        </div> 
        <input type="range" id="healthRange" class="form-range mb-5" min="0" max="4" step="1">
        <input type="reset" class="border-0 bg-white rounded text-info" value="Zurücksetzen">
        </form>
        </div>    
    </div>

 <?php include 'includes/footer.php'?>

</body>
</html>