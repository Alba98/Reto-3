const switchModeBtn = document.querySelector('#switch-mode');
const body = document.querySelector('body');
var active = true;
if(switchModeBtn) {
  switchModeBtn.addEventListener('click', function() {
    active = !active;
    if(body && active) {
      if (body.classList.contains('dark-mode')) {
        body.classList.remove('dark-mode');
        //switchModeBtn.setAttribute("label", "🌙 Dark");
      } else {
        body.classList.add('dark-mode');
        //sswitchModeBtn.setAttribute("label", "🌞 Light");
      }
    }  
  });
}
