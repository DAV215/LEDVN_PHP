let is_menu = false;
var menumobile_show = false;

function menu_mobile() {
    menumobile_show = !menumobile_show;
    if (menumobile_show) {
        $('#content_menu_mobile').css('display', 'flex');
    } else {
        $('#content_menu_mobile').css('display', 'none');
    }
}