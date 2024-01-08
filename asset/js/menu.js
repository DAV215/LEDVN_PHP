document.addEventListener("scroll", function() {
    var menu = document.getElementById("menu");
    var menuMb = document.getElementById("menu_mb");
    var contentMenuMobile = document.getElementById("content_menu_moblie");

    if (window.scrollY >= 300) {
        menu.classList.add("fixed");
        menuMb.classList.add("fixed");
        contentMenuMobile.classList.add("fixed");
    } else {
        menu.classList.remove("fixed");
        menuMb.classList.remove("fixed");
        contentMenuMobile.classList.remove("fixed");
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