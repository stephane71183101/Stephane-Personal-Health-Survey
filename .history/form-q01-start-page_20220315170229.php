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

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Logo</a>
        <div class="nav justify-content-end" id="navbarNav">
            <form class="d-flexme-2">
                <button class="btn btn-outline-success" type="submit">Vorige Seite</button>
                <button class="btn btn-outline-success" type="submit">Nächste Seite</button>
            </form>
        </div>
    </div>
    </nav>
</header>

<body>
    <div class="container-fluid pt-5 pb-3 text-center text-success bg-info">
        <div  class="container col-10">
        <p>Mit der folgenden Umfrage prüfen wir deine Ernährungsgewohnheiten und Bewegungshäufigkeiten und werden später auf dieser Basis dich besser begleiten können. Besten Dank für Deine Teilnahme!</p>
        </div>    
    </div>
    
    <div class="container-fluid pb-5 text-center text-success bg-info">
        <div  class="container col-10">
        <form>
        <label for="customRange1" class="form-label pb-2">Wie gesund bist du körperlich?</label>
        <input type="range" class="form-range pb-2" min="0" max="4" step="1" id="my-range" list="my-datalist"/>
<datalist id="my-datalist">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </datalist>
        <input type="reset" value="Zurücksetzen">
        </form>
        </div>    
    </div>

<footer>
    <div class="text-center text-white bg-warning">
    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
        <!-- Facebook -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
        ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-success p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-success" href="#">fitandwell.ch</a>
    </div>
    <!-- Copyright -->
    </div>
</footer>
</body>

</html>