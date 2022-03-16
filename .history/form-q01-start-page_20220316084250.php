<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="bg-info">
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
    <div class="container-fluid pt-5 pb-3 text-center text-white">
        <div  class="container col-10">
        <p>Mit der folgenden Umfrage prüfen wir deine Ernährungsgewohnheiten und Bewegungshäufigkeiten und werden später auf dieser Basis dich besser begleiten können. Besten Dank für Deine Teilnahme!</p>
        </div>    
    </div>
    
    <div class="container-fluid pb-5 text-center text-white">
        <div  class="container col-10">
        <form>
        <label for="customRange1" class="form-label mb-4">Wie gesund bist du körperlich?</label>
        <div class="container-fluid px-0 mb-2 small">
        <div class="row g-0">
        <div class="col text-start">0-20%</div>
        <div class="col text-start">20-40%</div>
        <div class="col">40-60%</div>
        <div class="col text-end">60-80%</div>
        <div class="col text-end">80-100%</div>
        </div>
        </div> 
        <input type="range" class="form-range mb-5" min="0" max="4" step="1" id="my-range">
        <input type="reset" class="border-0 bg-white rounded text-info" value="Zurücksetzen">
        </form>
        </div>    
    </div>

<footer class="fixed-bottom">
    <div class="text-center text-white bg-warning">
    <!-- Grid container -->
    <div class="container pt-0">
        <!-- Section: Social media -->
        <section class="mb-0">
        <!-- Facebook -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><img src="images/facebook.png" alt="Facebook-Logo" width="20%"></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><img src="images/twitter.png" alt="Twitter-Logo" width="20px"></a>

        <!-- Google -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><img src="images/google.png" alt="Google-Logo" width="20px"></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><img src="images/instagram.png" alt="Instagram-Logo" width="20px"></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><img src="images/linkedin.png" alt="LinkedIn-Logo" width="20px"></a>

        <!-- GitHub -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button" data-mdb-ripple-color="dark"><img src="images/github.png" alt="GitHub-Logo" width="20px"></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="#">fitandwell.ch</a>
    </div>
    <!-- Copyright -->
    </div>
</footer>
</body>

</html>