const form = document.querySelector<HTMLFormElement>('#login-form');

form.addEventListener('submit', (event: Event) => {
  event.preventDefault();

  const email = form.querySelector<HTMLInputElement>('#email');
  const password = form.querySelector<HTMLInputElement>('#password');

  if (!email.value) {
    alert('El campo de correo electrónico es requerido');
    return;
  }

  if (!password.value) {
    console.log('prueba');
    alert('El campo de contraseña es requerido');
    return;
  }

  // Enviar la solicitud de inicio de sesión aquí
  form.submit();
});