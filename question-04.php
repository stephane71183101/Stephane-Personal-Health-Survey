<?php include 'includes/head.php'?>

<body class="bg-info">
<?php include 'includes/header.php'?>
<?php 
// include 'includes/data-collector.php'; 
?>

<!-- Content -->
<div class="pt-5 pb-3" id="containerIntro">
    </div>
        <div class="container-fluid pb-5 text-center custom-control text-white">
            <form action="feedback.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">
            <label for="dietarySupplement" class="form-label mb-4">Welche zusätzliche körperliche Aktivität betreibst du am meisten?</label>
                <div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb01">
                        <label for="checkbox01">Keine zusätzliche körperliche Aktivität</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb02">
                        <label for="checkbox02">Gewichte heben</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb03">
                        <label for="checkbox03">Gehen</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb04">
                        <label for="checkbox04">Wandern</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb04">
                        <label for="checkbox04">Joggen</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb01">
                        <label for="checkbox01">Rennen</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb02">
                        <label for="checkbox02">Schwimmen</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb03">
                        <label for="checkbox03">Tanzen</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb04">
                        <label for="checkbox04">Aerobics</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb04">
                        <label for="checkbox04">Pilates</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb04">
                        <label for="checkbox04">Team Sport</label>
                    </div>
                    <div>
                        <input type="checkbox" id="noId" name="noName" value="cb04">
                        <label for="checkbox04">Andere</label>
                    </div>
                    <div>
                        <input type="hidden" name="lastPageID" value="question-03">
                        <input type="hidden" id="checkboxvalues" name="checkboxValues">
                    </div>
                    <p id="validation-warning" class="warning"></p>
                </div>
                <button type="submit" class="btn btn-outline-primary">Umfrage abschliessen</button>
                <input type="hidden" name="lastPageID" value="question-03">
            </form>
        </div>
    </div>
</div>
<!-- Content -->

<?php include 'includes/footer.php'?>
</body>
</html>