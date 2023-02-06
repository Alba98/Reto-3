var switchModeBtn = document.querySelector('#switch-mode');
var body = document.querySelector('body');
if (switchModeBtn) {
    switchModeBtn.addEventListener('click', function () {
        debugger;
        if (body) {
            if (body.classList.contains('dark-mode')) {
                body.classList.remove('dark-mode');
                switchModeBtn.innerHTML = "🌙 Dark";
            }
            else {
                body.classList.add('dark-mode');
                switchModeBtn.innerHTML = "🌞 Light";
            }
        }
    });
}
