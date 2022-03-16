<?php include 'includes/head.php'?>

<body class="bg-info">

<?php include 'includes/header.php'?>

<!-- Content -->
    <div class="container-fluid pt-5 pb-3 text-center text-white">
        <div  class="container col-10 min-vh-250">
        <p>Mit der folgenden Umfrage prüfen wir deine Ernährungsgewohnheiten und Bewegungshäufigkeiten und werden später auf dieser Basis dich besser begleiten können. Besten Dank für Deine Teilnahme!</p>
        </div>    
    </div>
        <div class="container-fluid pb-5 text-center text-white">
        <div  class="container col-10">
        <form>
        <label for="healthRange" class="form-label mb-4">Wie gesund bist du körperlich?</label>
        <div class="container-fluid px-0 mb-2 small">
        <div class="row g-0">
        <div class="col text-start">Ungesund</div>
        <div class="col">Mittelmässig</div>
        <div class="col text-end">Gesund</div>
        </div>
        </div> 
        <input type="range" id="healthRange" class="form-range mb-5" min="0" max="4" step="1">
        <input type="reset" class="border-0 bg-white rounded text-info" value="Zurücksetzen">
        </form>
        </div>    
    </div>
<!-- Content -->

 <?php include 'includes/footer.php'?>

</body>
</html>