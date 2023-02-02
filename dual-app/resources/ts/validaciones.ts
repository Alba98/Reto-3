const form = document.querySelector('form');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const emailHelp = document.querySelector('#emailHelp');
const passwordHelp = document.querySelector('#passwordHelp');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  let isValid = true;

  if (!email.value) {
    isValid = false;
    emailHelp.textContent = 'Es un campo obligatorio';
  } else {
    emailHelp.textContent = '';
  }

  if (!password.value) {
    isValid = false;
    passwordHelp.textContent = 'ES un campo oblgatorio';
  } else {
    passwordHelp.textContent = '';
  }

  if (isValid) {
    // Submit the form
  }
});
