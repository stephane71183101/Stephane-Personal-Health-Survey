<?php include 'includes/head.php'?>

<body class="bg-info">
<?php include 'includes/header.php'?>
<?php include 'includes/data-collector.php'; ?>


<!-- Content -->
<div class="pt-5 pb-3" id="containerIntro">
    </div>
        <div class="container-fluid pb-5 text-center custom-control text-white">
            <form action="question-04.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">
                <div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb01">
                        <label for="checkbox01">Check Box 01</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb02">
                        <label for="checkbox02">Check Box 02</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb03">
                        <label for="checkbox03">Check Box 03</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb04">
                        <label for="checkbox04">Check Box 04</label>
                    </div>
                    <div>
                        <input type="hidden" name="lastPageID" value="question-03">
                        <input type="hidden" id="checkboxvalues" name="checkboxValues">
                    </div>
                    <p id="validation-warning" class="warning"></p>
                </div>
                <button type="submit" class="btn btn-outline-primary">Nächste Frage</button>
            </form>
        </div>
    </div>
</div>
<!-- Content -->

<?php include 'includes/footer.php'?>
</body>
</html>