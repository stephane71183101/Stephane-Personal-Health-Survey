<?php include 'includes/head.php'?>
<body class="bg-info">
<?php include 'includes/header.php'?>

<!-- Content -->

<div class="containerpt-5 pb-3 center text-white">
    <div  class="container">
        <p>---</p>
    </div>    
    <div class="container pb-5 content-center text-white">
        <form retunr="" method="post" onsubmit="return validateRadio('single-choice');">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label>
            </div>
            <button type="submit" class="btn btn-outline-primary">Nächste Frage</button>
        </form>
</div>

<!-- Content -->

<?php include 'includes/footer.php'?>
</body>
</html>