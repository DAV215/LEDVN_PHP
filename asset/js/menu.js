document.addEventListener("scroll", function() {
    var menu = document.getElementById("menu");
    var menuMb = document.getElementById("menu_mb");
    var contentMenuMobile = document.getElementById("content_menu_moblie");
    var sidebar_main = document.querySelector('.sidebar_main');
    if (window.scrollY >= 300) {
        menu.classList.add("fixed");
        menuMb.classList.add("fixed");
        contentMenuMobile.classList.add("fixed");
        sidebar_main.style.position = 'fixed';
        sidebar_main.style.top = menu.offsetTop + 70 + 'px';

    } else {
        menu.classList.remove("fixed");
        menuMb.classList.remove("fixed");
        contentMenuMobile.classList.remove("fixed");
        sidebar_main.style.position = 'relative';
        sidebar_main.style.top = -15 + 'px';

    }
});

let is_menu = false;

function menu_mobile() {
    is_menu = !is_menu;
    if (is_menu == false) {
        document.getElementById("content_menu_moblie").classList.add('show');
        document.getElementById("content_menu_moblie").classList.remove('nonshow');

    } else {
        document.getElementById("content_menu_moblie").classList.remove('add');
        document.getElementById("content_menu_moblie").classList.add('nonshow');
    }
}