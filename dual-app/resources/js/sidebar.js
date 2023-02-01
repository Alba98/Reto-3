document.addEventListener("DOMContentLoaded", function (event) {
    /*===== TOGGLE NAV =====*/
    var btn = document.querySelector('.toggle');
    var btnst = false;
    btn.onclick = function() {
        const nav_name = document.querySelectorAll('.nav_name');
        if(btnst == true) {
          if (nav_name)
            nav_name.forEach((l) => l.classList.add('d-sm-inline'));

          btn.classList.remove('bi-arrow-right-square-fill');
          btn.classList.add('bi-x');

          document.getElementById('nav-bar').classList.remove('col-sm-1');
          document.getElementById('nav-bar').classList.add('col-sm-3');
          
          btnst = false;
        }else if(btnst == false) {
          if (nav_name)
            nav_name.forEach((l) => l.classList.remove('d-sm-inline'));

          btn.classList.remove('bi-x');
          btn.classList.add('bi-arrow-right-square-fill');

          document.getElementById('nav-bar').classList.add('col-sm-1');
          document.getElementById('nav-bar').classList.remove('col-sm-3');

          btnst = true;
        }
    }

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll(".nav_link");
    function colorLink() {
        if (linkColor) {
            linkColor.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        }
    }
    linkColor.forEach((l) => l.addEventListener("click", colorLink));
    // Your code to run since DOM is loaded and ready
});