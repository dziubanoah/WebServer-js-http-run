var input = document.getElementById("NameInput");
let submit = document.getElementById("submit");  // Korrekt: 'submit', nicht 'Sumit'
let ni = 0;
function getClientId() {
    let clientId = document.cookie.replace(/(?:(?:^|.*;\s*)clientId\s*=\s*([^;]*).*$)|^.*$/, "$1");

    if (!clientId) {
        clientId = 'client-' + Date.now() + '-' + Math.random().toString(36);
        document.cookie = `clientId=${clientId}; path=/; max-age=31536000`; // 1 Jahr gültig
    }
    
    return clientId;
}

let clientId = getClientId();
console.log("Client ID:", clientId);

if (clientId === 'client-1728984694739-0.j354wprsbq') {
    input.style.display= "block"; 
    submit.style.display= "block";
    window.alert("hi")
}
else (
    console.log("Die coockie ID aus main.js ist nicht korrekt")
);
submit.addEventListener("click", function () {
    ni = 1;
    if(ni == 1){
    //window.alert("works" + input.value);
};
    let data = input.value;
    //window.alert(data);

    fetch('http://192.168.1.194/script_mit_log.php', {
        method: 'POST',
        body: JSON.stringify({"inputname": data})
    })
    console.log(data)
    .then(response => response.text())
    .then(data => {
        console.log("PHP echo:", data);
        window.alert("PHP echo: " + data);
    })
});