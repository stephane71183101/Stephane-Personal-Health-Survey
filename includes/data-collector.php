<?php
//Muss vor dem Gebrauch von $_SESSION ausgeführt werden.
session_start();

// Hole der Namen der letzten Seite aus £_POST.
$lastPageID = $_POST["lastPageID"];

// Spreichere alle Daten des letzten Posts Mit den Namen $lastPageID in der Session
$_SESSION[$lastPageID] = $_POST;

// DEVONLY: Gib die akutelle $_SESSION in die Seite aus.
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>