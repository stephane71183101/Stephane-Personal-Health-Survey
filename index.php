<?php 
session_start();
session_destroy(); 
include 'includes/head.php'?>

<body class="bg-info">
<?php 
include 'includes/header.php';
// include 'includes/error-types.php';
?>

<!-- Content -->
    <div class="container-fluid pt-5 pb-3 text-center text-white" id="containerIntro">
        <div  class="container col-10">
        <p>Mit der folgenden Umfrage prüfen wir deine Ernährungsgewohnheiten und Bewegungshäufigkeiten und werden später auf dieser Basis dich besser begleiten können. Besten Dank für Deine Teilnahme!</p>
        </div>    
    </div>
    <div class="container-fluid pb-5 text-center text-white">
        <div  class="container col-10">
            <form action="question-02.php" method="post" onsubmit="return validateQuestion('range-slider');">
                <label for="healthRange" class="form-label mb-4">Wie gesund bist du körperlich?</label>
                <div class="container-fluid px-0 mb-2 small">
                    <div class="row g-0">
                        <div class="col text-start">Ungesund</div>
                        <div class="col">Mittelmässig</div>
                        <div class="col text-end">Gesund</div>
                    </div>
                </div> 
                <input type="range" name="slider" class="form-range mb-5" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
                <input type="hidden" name="lastPageID" value="index">
                <input type="hidden" id="range-slider-changed" name="range-slider-changed">
                <!-- <input type="reset" class="border-0 bg-white rounded text-info" value="Zurücksetzen"> -->
                <p id="validation-warning" class="warning"></p>
                <button type="submit" class="btn btn-outline-primary">Nächste Frage</button>
            </form>
        </div>    
    </div>
<!-- Content -->

 <?php include 'includes/footer.php'?>
</body>
</html>