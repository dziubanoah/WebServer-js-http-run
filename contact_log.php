<?php
// erlaubt cors
header("Access-Control-Allow-Origin: *");  // Erlaubt Anfragen von jeder Quelle
header("Access-Control-Allow-Methods: GET");  // Erlaubt GET, POST und OPTIONS Anfragen
header("Access-Control-Max-Age: 8400");  // Speichert die CORS-Erlaubnis für 24 Stunden

// Logik für das eigentliche Speichern des Kontakts

$logfile = "contacts.txt";

// Überprüfe, ob eine GET-Anfrage gesendet wurde

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Protokolliere den Kontakt in die datei contacts.txt

    $logdaten = "Escaperoom Team - Zeit: " . date('Y-m-d H:i:s') . PHP_EOL;

    file_put_contents($logfile, $logdaten, FILE_APPEND);

    $response = array("message" => "Kontakt gespeichert", "status" => "erfolgreich");
    echo json_encode($response);

} else {
    $response = array("message" => "Nur GET-Anfragen sind erlaubt", "status" => "fehler");
    echo json_encode($response);
}
?>
