function casourel_slide(classA, ID_BTN_PAGINATION) {
    var active_page = 0;
    var item = document.querySelectorAll(classA);
    var page_btn = document.querySelectorAll(ID_BTN_PAGINATION);

    // Check if page_btn is defined and not empty
    if (page_btn && page_btn.length > 0) {
        item[0].classList.add('active');

        for (let i = 0; i < page_btn.length; i++) {
            page_btn[i].addEventListener('click', function() {
                active_page = i;
                for (let j = 0; j < item.length; j++) {
                    page_btn[j].classList.remove('active');
                    item[j].classList.remove('active');
                }
                item[active_page].classList.add('active');
                page_btn[active_page].classList.add('active');
            });
        }
    } else {

    }
}

casourel_slide('#item_product_noibat', '#product_pagination_btn');
casourel_slide('#item_baiviet_noibat', '#baiviet_pagination_btn');