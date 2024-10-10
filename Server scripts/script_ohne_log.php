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
?>
