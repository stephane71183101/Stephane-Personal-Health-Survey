<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Indexierte Arrays</h1>

<?php
// Array setzen
$persons = array("Julian" => 34, "Nina" => 57, "Jürgen" => 32);

// Array
$persons['Sigmund'] = 54;


// Einzelne Werte abrufen
$age = $persons['Nina'];
echo "Nina ist $age Jahre alt.<br>";

$name = "Jürgen";
$age = $persons[$name];
echo "$name ist $age Jahre alt.<br>";

// Array in Seite ausgeben
echo "<pre>";
print_r($persons);
echo "</pre>";

// Alle Werte im Array auflisten
foreach($persons as $name => $age) {
    echo "$name ist $age Jahre alt.<br>";
}

// Liste alle Personen auf, die jünger als 40 Jahr alt sind.
foreach($persons as $name => $age) {
    if ($age < 40) {
        echo "$name ist $age Jahre alt und jünger als 40.<br>";
    }
}

?>
    
</body>
</html>