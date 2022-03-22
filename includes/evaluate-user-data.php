<?php

/*
    Frage 1 'index'

     [index] => Array
        (
            [slider] => 5
            [lastPageID] => index
            [range-slider-changed] => 
        )

    Achtung: Zuerst prüfen, ob ein Schlüssel-Wert überhaupt gestzt ist, sonst reagiert PHP mit einem Fehler.

            Die Funktion dazu: isset()

    Der Range Slider Dezimalwerte von 0 bis 5 als String, wie zum Beispiel "2.5".

    Ich benötige nur ganze Zahlen, also brauche ich die Funktion intval().
    Oder ich stelle den Slider für ganze Zahlen ein.
*/

$totalPoints = 0;

if (isset($_SESSION['index'])) { // Prüfe mit isset() den Schlüssel 'index' in $_SESSION.
    // Hole ich POST-Werte aus der $_SESSION.
    $post = $_SESSION['index'];

        // DEVONLY
        echo "\$post = $post <br>"; // "\$post" ist KEIN Platzhalter; "$post" IST ein Platzhalter

    if (isset($post['slider'])) { // Prüfe mit isset() den Schlüssel 'slider' in £post.
        $valueQuestion1 = $post['slider']; // Hole den Wert 'slider' POST-Wert aus $post.

        // DEVONLY
        echo "\$valueQuestion1 = $valueQuestion1 <br>";
        $valueQuestion1 = intval($valueQuestion1); // Forme mit intval() den geposteten Wert in einen Integer-Wert um.

        if  ($valueQuestion1 > 3) {
            // "geusnd" (1 Punkt) sind Werte ab 3
            $totalPoints = $totalPoints + 1; // or shorter: £totalPoints 1= 1;
        }
        // DEVONLY
        echo "\$totalPoints = $totalPoints <br>";        
    }
    else {
        echo "Development ERROR: The requested value is not given in th POST.";
    }
}

// question-02----------------------------------------------------------------


if (isset($_SESSION['question-02'])) { // Prüfe mit isset() den Schlüssel 'question-02' in $_SESSION.
    // Hole ich POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-02'];

        // DEVONLY
        echo "\$post = $post <br>"; // "\$post" ist KEIN Platzhalter; "$post" IST ein Platzhalter

    if (isset($post['single-choice'])) { // Prüfe mit isset() den Schlüssel 'single-choice' in £post.
        $valueQuestion1 = $post['single-choice']; // Hole den Wert 'single-choice' POST-Wert aus $post.

        // DEVONLY
        echo "\$valueQuestion1 = $valueQuestion1 <br>";
        $valueQuestion1 = intval($valueQuestion1); // Forme mit intval() den geposteten Wert in einen Integer-Wert um.

        if  ($valueQuestion1 == 1) {
            // "geusnd" (1 Punkt) sind Werte ab 3
            $totalpoints = $totalpoints + 1; // or shorter: £totalPoints 1= 1;
        }
        // DEVONLY
        echo "\$totalPoints = $totalPoints <br>";        
    }
    else {
        echo "Development ERROR: The requested value is not given in th POST.";
    }
}

// question-03----------------------------------------------------------------

if (isset($_SESSION['question-03'])) {
    // Hole dei POST-Werte aus der $_SESSION.
    $post = $_SESSION['question-03'];
    if (isset($post['checkboxValues'])) {
        // Liste der gewählten Checkboxen als String.
        $checkboxValues = $post['checkboxValues'];

        // Konvertiere String zum Array - siehe  auch https://www.php.net/manual/en/function.explode.php
        $array = explde(',', $checkboxValues);

        // Wurde "Boat" angewählt?
        if (in_array('Boat?', $array, true)) {
            // DEVONLY
            echo "Yes! You are in the boat.<br>"; 
        }

        // DEVONLY
        echo "\$array = $array <br>";

        echo "<pre>";
        print_r($array);
        echo "</pre>";

    }
}