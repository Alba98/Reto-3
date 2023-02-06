const switchModeBtn = document.querySelector('#switch-mode');
const body = document.querySelector('body');


switchModeBtn.addEventListener('click', function() {
  if (body.classList.contains('dark-mode')) {
    body.classList.remove('dark-mode');
    switchModeBtn.innerHTML = "🌙 Dark";
  } else {
    body.classList.add('dark-mode');
    switchModeBtn.innerHTML = "🌞 Light";
  }
});
