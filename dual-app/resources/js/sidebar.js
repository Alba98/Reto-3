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

          document.getElementById('nav-bar').classList.add('col-sm-3');
          document.getElementById('nav-bar').classList.remove('col-sm-2');
          document.getElementById('nav-bar').classList.add('col-xl-2');
          document.getElementById('nav-bar').classList.remove('col-xl-1');

          document.getElementById('main-side').classList.add('col-sm-9');
          document.getElementById('main-side').classList.remove('col-sm-10');
          document.getElementById('main-side').classList.add('col-xl-10');
          document.getElementById('main-side').classList.remove('col-xl-11');

          btnst = false;
        }else if(btnst == false) {
          if (nav_name)
            nav_name.forEach((l) => l.classList.remove('d-sm-inline'));

          btn.classList.remove('bi-x');
          btn.classList.add('bi-list');

          document.getElementById('nav-bar').classList.remove('col-sm-3');
          document.getElementById('nav-bar').classList.add('col-sm-2');
          document.getElementById('nav-bar').classList.remove('col-xl-2');
          document.getElementById('nav-bar').classList.add('col-xl-1');

          document.getElementById('main-side').classList.remove('col-sm-9');
          document.getElementById('main-side').classList.add('col-sm-10');
          document.getElementById('main-side').classList.remove('col-xl-10');
          document.getElementById('main-side').classList.add('col-xl-11');
          

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