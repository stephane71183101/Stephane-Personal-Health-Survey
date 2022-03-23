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
$people = array(
    array(
        "firstName" => "Pablito", 
        "lastName" => "Lopez", 
        "age" => 67),
    array(
        "firstName" => "Miguelito", 
        "lastName" => "Bardón", 
        "age" => 59),
    array(
        "firstName" => "Paloma", 
        "lastName" => "Pérez", 
        "age" => 42)
);

// Einzelne Werte abrufen
// Was ist der 'lastName' vom 2. Personen-Datensatz?
// Vorgehen in zwei Schritten:
$personData = $people[1];
echo "Als 2. Personen-Datensatz git es:<br>";
print_r($personData);
echo "<br>";

$lastName = $personData['lastName'];
echo "Als zweiter Stelle kommt Herr/Frau $lastName.<br>";

// Vorgehen in einem Schritt:
$personData = $people[1]['lastName'];
echo "Als zweiter Stelle kommt Herr/Frau $lastName.<br>";

// Achtung! Prüfen, ob ein Schlüssel überhaupt existiert: isset()
$x = 0;
$y = 'lastName';

if (isset($people[$x]) && isset($people[$x][$y])) {
    $lastName = $people[$x][$y];
    echo "'lastName' aus x und y ist $lastName.<br>";
}
else {
// Schlüssel $x oder $y ist nicht $people.
}

// Array in Seite ausgeben
echo "<pre>";
print_r($people);
echo "</pre>";

// Alle Werte im Array auflisten.
for ($i = 0; $i < count($people); $i++) {
    $personData = $people[$i];
    $firstName = $personData['firstName'];
    $lastName = $personData['lastName'];
    $age = $personData['age'];

    echo "$firstName $lastName ist $age Jahre alt.<br>";
}


// Finde heraus , ob sich "... in der Personenliste befindet.

?>
    
</body>
</html>