<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $jarFile = 'main.jar';

    if (file_exists($jarFile)) {
        $command = "start javaw -jar " . escapeshellarg($jarFile);
        pclose(popen($command, "r"));

        echo "Anfrage angenommen und .jar-Datei gestartet.";
    } else {
        echo "Die Datei wurde nicht gefunden.";
    }
} else {
    echo "Nur GET-Anfragen werden akzeptiert.";
}
$team = "MeinTeam"; // Ersetze dies durch den gewünschten Teamnamen
$datum = date("Y-m-d"); // Aktuelles Datum im Format Jahr-Monat-Tag
$zeit = date("H:i:s"); // Aktuelle Uhrzeit im Format Stunden:Minuten:Sekunden

$logEintrag = "Team: $team, Datum: $datum, Zeit: $zeit\n";

// Schreibe den Eintrag in die log.txt
file_put_contents('log.txt', $logEintrag, FILE_APPEND);
?>
