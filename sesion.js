// sesion.js

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("loginForm");

    // Agregar un manejador de eventos para el envío del formulario
    loginForm.addEventListener("submit", (event) => {
        event.preventDefault(); // Evitar el envío automático del formulario

        // Obtener los valores de los campos de entrada
        const username = loginForm.querySelector('input[type="text"]').value;
        const password = loginForm.querySelector('input[type="password"]').value;

        // Validar los datos (en este ejemplo, solo se hace una verificación sencilla)
        if (username === "usuario" && password === "1234") {
            window.location.href = 'inicio.html';
            // Aquí puedes redirigir a otra página o realizar otras acciones
        } else {
            alert("Usuario o contraseña incorrectos");
        }
    });
});
