document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    if (username === "Cliente" && password === "1234") {
        window.location.href = 'index.html';
    } else {
        document.getElementById('message').innerText = "Usuario o contraseña incorrectos.";
    }
});
