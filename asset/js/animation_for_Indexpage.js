window.addEventListener("scroll", function() {
    check_scroll_POS('.content', 'h1.name_of_hangmuc');
    check_scroll_POS('.list', 'h1.name_of_hangmuc');
}, 200);

function check_scroll_POS(Parent_CLS, obj) {
    let all_parent_Pros_Element = document.querySelectorAll(Parent_CLS);
    all_parent_Pros_Element.forEach(element => {
        let el = element.querySelector(obj);
        if (el) {
            let pos = el.getBoundingClientRect();
            if (window.innerWidth < 900) {
                if ((pos.top > 50 && pos.top < 60) || pos.top - window.screen.availHeight < 100) {
                    el.classList.add("focus-in-contract-bck");
                }
                if (pos.top < 10 || pos.top - window.screen.availHeight > 150) {
                    el.classList.remove("focus-in-contract-bck");
                }
            } else {
                if ((pos.top > 50 && pos.top < 60) || pos.top - window.screen.availHeight < 2) {
                    el.classList.add("focus-in-contract-bck");
                }
                if (pos.top < 10 || pos.top - window.screen.availHeight > 150) {
                    el.classList.remove("focus-in-contract-bck");
                }
            }
        }
    });
}