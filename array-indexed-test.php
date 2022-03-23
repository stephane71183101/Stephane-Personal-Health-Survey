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
$people = array("Petra", "Felicitas", "Mariano", "Noemi");

// Einzelne Werte abrufen
$name = $people[2];
echo "An dritter Position ist $name.<br>";

$i = 0;
$name1 = $people[$i];
echo "An erster Position ist $name1.<br>";

// Array in Seite ausgeben
echo "<pre>";
print_r($people);
echo "</pre>";

// Alle Werte im Array auflisten
for ($i = 0; $i < count($people); $i++) { // $i++ ist dasselbe wie $i = $i + 1
    $name = $people[$i];
    echo "An $i-ten Position ist $name.<br>";
}

// Finde heraus , ob sich "Felicitas" in der Personenliste befindet.
$name = "Felicitas";

for ($i = 0; $i < count($people); $i++) {
    if ($people[$i] === $name) {
        echo "Ja, $name ist in der Liste";
    }
}
?>
    
</body>
</html>