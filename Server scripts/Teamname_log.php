<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 31536000");  // Speichert die CORS-Erlaubnis auf 1 Jahr (Für immer nich möglich)


// Nimmt die Rohdaten des POST-Requests (JSON) entgegen
$json = file_get_contents('php://input');

// Konvertiert JSON in ein assoziatives Array
$data = json_decode($json, true);

if (isset($data['inputname'])) {
    $inputname = $data['inputname'];
    file_put_contents('log.txt', date('Y-m-d H:i:s') . " - Empfangen: " . $inputname . PHP_EOL, FILE_APPEND);
} else {
    file_put_contents('log.txt', date('Y-m-d H:i:s') . " - Fehler: 'inputname' nicht gefunden" . PHP_EOL, FILE_APPEND);
}
echo"Script 2 klappt";

?>