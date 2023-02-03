var form = document.querySelector('#login-form');
form.addEventListener('submit', function (event) {
    event.preventDefault();
    var email = form.querySelector('#email');
    var password = form.querySelector('#password');
    if (!email.value) {
        alert('El campo de correo electrónico es requerido');
        return;
    }
    if (!password.value) {
        console.log('nia');
        alert('El campo de contraseña es requerido');
        return;
    }
    // Enviar la solicitud de inicio de sesión aquí
    form.submit();
});
