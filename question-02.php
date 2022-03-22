<?php include 'includes/head.php'?>

<body class="bg-info">
<?php include 'includes/header.php'?>
<?php include 'includes/data-collector.php'; ?>


<!-- Content -->
<div class="pt-5 pb-3" id="containerIntro">
</div>
<div class="container-fluid pb-5 text-center custom-control text-white">
    <form action="question-03.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">
        <label for="dietarySupplement" class="form-label mb-4">Nimmst du Nahrungsergänzungsmittel?</label>
        <div class="form-check">
            <input class="custom-control-input" type="radio" name="single-choice" id="single-choice-0" value="0">
            <label class="form-check-label" for="single-choice-0">Nein</label>
        </div>
        <div class="form-check">
            <input class="custom-control-input" type="radio" name="single-choice" id="single-choice-1" value="1">
            <label class="form-check-label" for="single-choice-1">Ja</label>
        </div>
        <button type="submit" class="btn btn-outline-primary">Nächste Frage</button>
        <input type="hidden" name="lastPageID" value="question-02">
    </form>
</div>
<!-- Content -->

<?php include 'includes/footer.php'?>
</body>
</html>