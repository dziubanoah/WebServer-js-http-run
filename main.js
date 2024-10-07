document.getElementById('myButton').addEventListener('click', function() {
        // Anfrage an den Server auf Client 2 senden (XAMPP auf 192.168.1.6)
    fetch('http://192.168.1.6/run_script.php', {
        method: 'GET',
    })
    .then(response => {
        if (response.ok) {
            return response.text();
        } else {
            throw new Error('Fehler bei der Skriptausführung');
        }
    })
    .then(data => {
        console.log('Erfolg:', data);
    })
    .catch(error => {
        console.error('Fehler:', error);
    });
});