document.addEventListener("DOMContentLoaded", function (event) {
    /*===== TOGGLE NAV =====*/
    var btn = document.querySelector('.toggle');
    var btnst = false;
    // optional chaining
    btn === null || btn === void 0 ? void 0 : btn.addEventListener("click", collapse);
    function collapse() {
        var _a, _b, _c, _d, _e, _f, _g, _h, _j, _k, _l, _m, _o, _p, _q, _r;
        try {
            var nav_name = document.querySelectorAll('.nav_name');
            if (btnst == true) {
                if (nav_name)
                    nav_name.forEach(function (l) { return l.classList.add('d-sm-inline'); });
                btn === null || btn === void 0 ? void 0 : btn.classList.remove('bi-arrow-right-square-fill');
                btn === null || btn === void 0 ? void 0 : btn.classList.add('bi-x');
                (_a = document.getElementById('nav-bar')) === null || _a === void 0 ? void 0 : _a.classList.add('col-sm-3');
                (_b = document.getElementById('nav-bar')) === null || _b === void 0 ? void 0 : _b.classList.remove('col-sm-2');
                (_c = document.getElementById('nav-bar')) === null || _c === void 0 ? void 0 : _c.classList.add('col-xl-2');
                (_d = document.getElementById('nav-bar')) === null || _d === void 0 ? void 0 : _d.classList.remove('col-xl-1');
                (_e = document.getElementById('main-side')) === null || _e === void 0 ? void 0 : _e.classList.add('col-sm-9');
                (_f = document.getElementById('main-side')) === null || _f === void 0 ? void 0 : _f.classList.remove('col-sm-10');
                (_g = document.getElementById('main-side')) === null || _g === void 0 ? void 0 : _g.classList.add('col-xl-10');
                (_h = document.getElementById('main-side')) === null || _h === void 0 ? void 0 : _h.classList.remove('col-xl-11');
                btnst = false;
            }
            else if (btnst == false) {
                if (nav_name)
                    nav_name.forEach(function (l) { return l.classList.remove('d-sm-inline'); });
                btn === null || btn === void 0 ? void 0 : btn.classList.remove('bi-x');
                btn === null || btn === void 0 ? void 0 : btn.classList.add('bi-list');
                (_j = document.getElementById('nav-bar')) === null || _j === void 0 ? void 0 : _j.classList.remove('col-sm-3');
                (_k = document.getElementById('nav-bar')) === null || _k === void 0 ? void 0 : _k.classList.add('col-sm-2');
                (_l = document.getElementById('nav-bar')) === null || _l === void 0 ? void 0 : _l.classList.remove('col-xl-2');
                (_m = document.getElementById('nav-bar')) === null || _m === void 0 ? void 0 : _m.classList.add('col-xl-1');
                (_o = document.getElementById('main-side')) === null || _o === void 0 ? void 0 : _o.classList.remove('col-sm-9');
                (_p = document.getElementById('main-side')) === null || _p === void 0 ? void 0 : _p.classList.add('col-sm-10');
                (_q = document.getElementById('main-side')) === null || _q === void 0 ? void 0 : _q.classList.remove('col-xl-10');
                (_r = document.getElementById('main-side')) === null || _r === void 0 ? void 0 : _r.classList.add('col-xl-11');
                btnst = true;
            }
        }
        catch (error) {
            console.log(error);
        }
    }
    /*===== LINK ACTIVE =====*/
    var linkColor = document.querySelectorAll(".nav_link");
    linkColor.forEach(function (l) { return l.addEventListener("click", colorLink); });
    function colorLink() {
        if (linkColor) {
            linkColor.forEach(function (l) { return l.classList.remove("active"); });
            this.classList.add("active");
        }
    }
});
