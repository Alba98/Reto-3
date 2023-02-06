const switchModeBtn = document.querySelector('#switch-mode');
const body = document.querySelector('body');

if(switchModeBtn) {
  switchModeBtn.addEventListener('click', function() {
    debugger
    if(body) {
      if (body.classList.contains('dark-mode')) {
        body.classList.remove('dark-mode');
        switchModeBtn.innerHTML = "🌙 Dark";
      } else {
        body.classList.add('dark-mode');
        switchModeBtn.innerHTML = "🌞 Light";
      }
    }  
  });
}
