const submit = document.getElementById("submit");
const input = document.getElementById("NameInput");

submit.addEventListener('click', function(event) {
    event.preventDefault(); // Verhindert das Standardverhalten des Buttons

    const values = input.value; // Den Wert des Input-Felds holen
    console.log(values);

    fetch('http://192.168.1.194/Teamname_log.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'inputValue=' + encodeURIComponent(values), // Korrektur: values verwenden
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Antwort vom PHP-Skript
    })
    .catch(error => {
        console.error('Fehler:', error);
    });
});
