<?php include 'includes/head.php'?>

<body class="bg-info">
<?php include 'includes/header.php' ?>
<?php 
// include 'includes/data-collector.php'; 
?>
<?php include 'includes/evaluate-user-data.php' ?>

<!-- Content -->
<div class="pt-5 pb-3" id="containerIntro">
</div>
    <div class="container-fluid pb-5 text-center text-white">
    <p>Feedback<p>    
    <p>Danke für Deine Teilnahme!<p> 
    </div>
    Test line 1 <?php echo $_POST["lastPageID"]; ?><br>
    Test line 2 <?php echo $_POST["single-choice-0"]; ?>
</div>

<?php
// echo "<p class='final-feedback'>" . "You are of excellent health!" . "<p>";
?>

<!-- Content -->

<?php include 'includes/footer.php'?>
</body>
</html>