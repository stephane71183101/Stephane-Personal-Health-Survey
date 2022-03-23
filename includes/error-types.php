<?php
/* Dieses Skript ist für Testzwecke. */

echo "Good morning, let's make errors!<br>";

// Syntax-Errors

// $hello = "";
// $world = "world";
// $cars = ['Bentley', 'Volvo', 'Toyota'];

// Nicht existierende Variablen
// if ($scar === 'Volvo') {echo 'I like Volvo!';}

// Nicht existierende Array-Schlüssel (Keys)
/*
$persons = [
        "Peter" => "Peter Muster",
        "Petra" => "Petra Muster"
];

// Logishe Fehler
$p = 100;
*/

// Die drei folgende Zeilen geben das gleich Ergebnis:
/*
echo "$" . "p" . " = " . $p . "<br>";
echo '$p' . " = " . $p . "<br>";
echo "\$p = $p<br>";

if ($p > 100) {
    echo "Ja";
}
else{
    echo "Nein";
}
*/

/*
PHP Parse error:  syntax error, unexpected end of file, expecting variable or "${" or "{$" in /home/oppdev2021/Documents/projects/Stephane-Personal-Health-Survey/includes/error-types.php on line 10
    */
?>