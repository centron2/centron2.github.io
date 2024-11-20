document.addEventListener('DOMContentLoaded', function() {
    // Variable para almacenar correos electrónicos registrados
    const registeredEmails = new Set();

    // Función para validar la edad
    function validateAge(age) {
        return age >= 18;
    }

    // Función para validar caracteres en nombre y apellido
    function validateName(name) {
        const regex = /^[a-zA-Z\s]+$/;
        return regex.test(name);
    }

    // Función para validar si el correo electrónico ya está registrado
    function isEmailRegistered(email) {
        return registeredEmails.has(email);
    }

    // Manejo del formulario
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Obtener los valores del formulario
        const nombre = document.getElementById('Nombre').value.trim();
        const apellido = document.getElementById('Apellido').value.trim();
        const gmail = document.getElementById('Gmail').value.trim();
        const edad = parseInt(document.getElementById('Edad').value.trim(), 10);

        // Validar nombre y apellido
        if (!validateName(nombre)) {
            alert('El nombre no debe contener caracteres extraños.');
            return;
        }

        if (!validateName(apellido)) {
            alert('El apellido no debe contener caracteres extraños.');
            return;
        }

        // Validar edad
        if (!validateAge(edad)) {
            alert('Debes tener al menos 18 años para registrarte.');
            return;
        }

        // Validar correo electrónico
        if (isEmailRegistered(gmail)) {
            alert('El correo electrónico ya está registrado.');
            return;
        }

        // Si todo es válido, registrar el correo y permitir el envío del formulario
        registeredEmails.add(gmail);
        document.getElementById('registrationForm').submit();
    });
});
