<?php
header("Access-Control-Allow-Origin: *");  // Erlaubt Anfragen von jeder Quelle
header("Access-Control-Allow-Methods: GET");  // Erlaubt GET, POST und OPTIONS Anfragen
header("Access-Control-Max-Age: 8400");  // Speichert die CORS-Erlaubnis für 24 Stunden

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo"GET works";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo"POST Works";
}
?>