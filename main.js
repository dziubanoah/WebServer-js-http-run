document.getElementById('Button1').addEventListener('click', function() {
    window.alert("clicked")
    fetch('http://192.168.1.128/script.php', {
        method: 'GET',
        mode: 'no-cors',
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