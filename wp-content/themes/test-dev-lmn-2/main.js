var btnNav = document.querySelector('.menu-btn');
var mobileMn = document.querySelector('.open-menu');
var lang = document.querySelector('.lang');
var btnClose = document.querySelector('.menu-btn-close');
var svgWhite = document.querySelector('.svg-white')

if (btnNav && mobileMn && lang && btnClose) {
    btnNav.addEventListener('click', function() {
        if (mobileMn.style.display == 'block') {
            mobileMn.style.display = 'none';
            lang.style.display = 'none';
            btnClose.style.display = 'none';
        }
        else {
            mobileMn.style.display = 'block';
            lang.style.display = 'flex';
            btnClose.style.display = 'block';
            btnNav.style.display = 'none';
            svgWhite.classList.add('white-filter');
        }
    });
}

if (btnNav && mobileMn && lang && btnClose) {
    btnClose.addEventListener('click', function() {
        if (mobileMn.style.display == 'none') {
            mobileMn.style.display = 'block';
            lang.style.display = 'block';
            btnClose.style.display = 'block';
        }
        else {
            mobileMn.style.display = 'none';
            lang.style.display = 'none';
            btnClose.style.display = 'none';
            btnNav.style.display = 'block';
            svgWhite.classList.remove('white-filter');
        }
    });
}