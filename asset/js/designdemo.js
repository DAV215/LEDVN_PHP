var default_move_bool = new Array(0, 0, 0);
var default_fontType_bool, default_fontSize_bool, default_color_bool;

function move_demo(ID_ELEMENT) {
    var isDragging = false;
    var offsetX, offsetY;

    var element = document.getElementById(ID_ELEMENT);
    var parent = document.getElementById('khungdemo');

    function handleStart(e) {
        isDragging = true;

        var clientX, clientY;

        if (e.type === 'touchstart') {
            clientX = e.touches[0].clientX;
            clientY = e.touches[0].clientY;
        } else if (e.type === 'mousedown') {
            clientX = e.clientX;
            clientY = e.clientY;
        }

        offsetX = element.offsetLeft - clientX;
        offsetY = element.offsetTop - clientY;

        if (ID_ELEMENT == 'nd1') default_move_bool[0] = 1;
        // Add similar conditions for other elements if needed
    }

    function handleMove(e) {
        if (isDragging) {
            e.preventDefault(); // Prevent scrolling on touch devices

            var clientX, clientY;

            if (e.type === 'touchmove') {
                clientX = e.touches[0].clientX;
                clientY = e.touches[0].clientY;
            } else if (e.type === 'mousemove') {
                clientX = e.clientX;
                clientY = e.clientY;
            }

            var x = clientX + offsetX;
            var y = clientY + offsetY;

            x = Math.min(Math.max(x, 0), parent.clientWidth - element.clientWidth);
            y = Math.min(Math.max(y, 0), parent.clientHeight - element.clientHeight);

            element.style.left = x + 'px';
            element.style.top = y + 'px';
            DrawSizebore();

        }
        DrawSizebore();

    }

    function handleEnd() {
        isDragging = false;
        DrawSizebore();
    }

    // Event listeners for both touch and mouse events
    element.addEventListener('mousedown', handleStart);
    element.addEventListener('touchstart', handleStart);

    document.addEventListener('mousemove', handleMove);
    document.addEventListener('touchmove', handleMove, { passive: false });

    document.addEventListener('mouseup', handleEnd);
    document.addEventListener('touchend', handleEnd);

    DrawSizebore();
}




function check_default_move_bool() {
    if (default_move_bool.every(value => value === 0)) {
        let khungdemo = document.getElementById("khungdemo");

        let nd1 = document.getElementById("nd1");
        let nd2 = document.getElementById("nd2");
        let nd3 = document.getElementById("nd3");
        let left_ = khungdemo.offsetWidth * 0.4 - nd1.offsetWidth / 2;
        let top_ = khungdemo.offsetHeight * 0.1 + 50;
        let FontSize = 18 / 100 + 1;
        if (default_move_bool.every(value => value === 0)) {
            nd1.style.left = left_ + 'px';
            nd1.style.top = top_ + 'px';
            nd2.style.left = left_ + nd1.offsetWidth / 1.7 + 'px';
            nd2.style.top = top_ + nd1.offsetHeight * FontSize / 0.8 + 'px';
            nd2.style.transform = "rotateZ(-17deg)";
            nd3.style.left = left_ + nd1.offsetWidth / 2 + 'px';
            nd3.style.top = nd2.offsetTop + nd2.offsetHeight * FontSize / 0.8 + 'px';
        } else {
            nd2.style.transform = "rotateZ(0deg)";
        }
    }
}
check_default_move_bool();

function update_content(ID_ELEMENT_IN, ID_ELEMENT_OUT) {
    var in_ = document.getElementById(ID_ELEMENT_IN);
    var out_ = document.getElementById(ID_ELEMENT_OUT);
    if (in_.value.trim() == "") {
        out_.textContent = "";
    } else {
        out_.style.display = "block";

    }
    in_.addEventListener("input", function() {
        out_.textContent = in_.value;
    });
    if (out_.style.display == 'none') {
        in_.placeholder = 'Nhập dòng 3 trước';
        in_.disabled = true;
    } else {
        in_.placeholder = '';
        in_.disabled = false;
    }
    DrawSizebore();
}
var old_color;

function updateColor(CLASS_COLOR_NAME) {
    let ALL_Btn = document.querySelectorAll('.btn_Select_Color button');
    let BTN = document.getElementById(CLASS_COLOR_NAME);
    var parent_id_content = document.getElementById("khungdemo");
    parent_id_content.classList.remove(old_color);
    parent_id_content.classList.add(CLASS_COLOR_NAME);
    old_color = CLASS_COLOR_NAME;
    ALL_Btn.forEach(element => {
        element.classList.remove('active');
    });
    BTN.classList.add('active');
}
var now_font;

function updatefont(fontName) {
    var parent_id_content = document.getElementById("khungdemo");
    let BTN_shormore_Font = document.getElementById('Show_more_BTN');
    let showFontName_BTN_SHOWMORE = document.getElementById('fontName_BTN');

    // Define the @font-face rule
    var fontFaceRule = "@font-face { font-family: '" + fontName + "'; src: url('asset/font/" + fontName + ".otf') format('opentype'); }";

    // Create a style element to apply the @font-face rule
    var styleElement = document.createElement('style');
    styleElement.appendChild(document.createTextNode(fontFaceRule));

    // Append the style element to the head of the document
    document.head.appendChild(styleElement);
    now_font = fontName;
    // Set the font family for the target element
    parent_id_content.style.fontFamily = fontName;
    //Sẽ ẩn và kh tìm ra 2 I này nếu kh Login
    if (BTN_shormore_Font || showFontName_BTN_SHOWMORE) {
        BTN_shormore_Font.style.fontFamily = fontName;
        showFontName_BTN_SHOWMORE.innerHTML = fontName;
    }

    updatefont_('fontName_BTN', now_font);
    DrawSizebore();

}

function updatefont_(ID_element, fontName) {
    let parent_id_content = document.getElementById(ID_element);

    // Define the @font-face rule
    let fontFaceRule = "@font-face { font-family: '" + fontName + "'; src: url('asset/font/" + fontName + ".otf') format('opentype'); }";

    // Create a style element to apply the @font-face rule
    let styleElement = document.createElement('style');
    styleElement.appendChild(document.createTextNode(fontFaceRule));

    // Append the style element to the head of the document
    document.head.appendChild(styleElement);

    // Set the font family for the target element
    //Sẽ ẩn và kh tìm ra 2 I này nếu kh Login
    if (parent_id_content) {
        parent_id_content.style.fontFamily = fontName;

    }
}

var showmoreFont_btn = false;

function update_faIcon_btn(CLASS_SHOWMORE) {
    let showMoreElements = document.querySelector(CLASS_SHOWMORE);
    let BTN = document.getElementById('Show_more_BTN');
    let BTN_icon = document.getElementById('Show_more_BTN').getElementsByTagName('i')[0];
    // Toggle the boolean value
    showmoreFont_btn = !showmoreFont_btn;

    if (showmoreFont_btn) {
        BTN_icon.classList.remove('fa-angle-down');
        BTN_icon.classList.add('fa-angle-up');
    } else {
        BTN_icon.classList.remove('fa-angle-up');
        BTN_icon.classList.add('fa-angle-down');
    }

    showMoreElements.classList.toggle('active', showmoreFont_btn);
}



function updateFontSize_(fontSize) {
    var parent_id_content = document.getElementById("khungdemo");
    parent_id_content.style.fontSize = fontSize + 'px';
}

function updateFontSize() {
    check_default_move_bool();
    let parent_id_content = document.getElementById("khungdemo");
    let showValue_W_H = document.querySelectorAll('#showSizeText .value');
    let FontSize;
    if (window.innerWidth < 900) {
        FontSize = document.getElementById("FontSize_mb").value;
    } else {
        FontSize = document.getElementById("FontSize").value;
    }
    parent_id_content.style.fontSize = FontSize + 'px';
    showValue_W_H.forEach(element => {
        element.style.fontSize = Math.max(Math.ceil(FontSize * 0.6), 12) + 'px';
        element.style.minWidth = 'auto';
    });
    DrawSizebore();
}

function default_Design(fontSize_, fontType, color) {
    updateColor(color);
    updatefont(fontType);
    updateFontSize_(fontSize_);
    check_default_move_bool();
    DrawSizebore();
}

function color_ofButton() {
    let parentclass_ofbtn = document.querySelector(".btn");
    var buttons = parentclass_ofbtn.getElementsByTagName("button");
    var buttonArray = Array.from(buttons);
    buttonArray.forEach(element => {
        var button_id = element.id;
        element.classList.add(button_id);
    });
}

function font_ofButton() {
    let parentclass_ofbtn = document.querySelector(".font_More");
    //Sẽ ẩn và kh tìm ra 2 I này nếu kh Login
    if (parentclass_ofbtn) {
        let buttons = parentclass_ofbtn.getElementsByTagName("button");
        let buttonArray = Array.from(buttons);
        buttonArray.forEach(element => {
            let button_id = element.id;
            updatefont_(button_id, button_id);
        });
    }

}

function font_ofButton_mb() {
    let parentclass_ofbtn = document.querySelector(".font_More");
    let buttons = parentclass_ofbtn.querySelectorAll(".font_box button");
    let buttonArray = Array.from(buttons);
    buttonArray.forEach(element => {
        let button_id = element.id;
        updatefont_mb(button_id, button_id);
    });
}

function DrawSizebore() {
    function getPos(ID_ELEMENT, STT_TOP) {
        let ID = document.getElementById(ID_ELEMENT);
        let x, y;
        if (STT_TOP == 1) {
            x = ID.offsetLeft + ID.offsetWidth;
            y = ID.offsetTop + ID.offsetHeight;
        } else {
            x = ID.offsetLeft;
            y = ID.offsetTop;
        }
        let pos = new Array(x, y);
        return pos;
    }

    function check_input_null(ID_ELEMENT) {
        let ID = document.getElementById(ID_ELEMENT);
        let bool = false;
        if (ID.offsetWidth == 0) {
            bool = true;
        } else bool = false;
        return bool;
    }

    function GET_W_H_of_ID(ID_ELEMENT) {
        let ID = document.getElementById(ID_ELEMENT);
        let width = ID.offsetWidth;
        let height = ID.offsetHeight;
        let left = ID.offsetLeft;
        let top = ID.offsetTop;
        return Array(width, height, left, top);
    }
    if (check_input_null('nd3') == false) {
        document.getElementById('nd2').style.display = 'block';
        document.querySelector('#showSizeText .bottom .firt.border').style.display = 'block';
        document.querySelector('#showSizeText .bottom .second.border').style.display = 'block';
        document.querySelector('#showSizeText .bottom .firt.border').style.height = '2px';
        document.querySelector('#showSizeText .bottom .second.border').style.height = '2px';
        document.querySelector('#showSizeText .bottom .value').style.minWidth = 'auto';
        document.querySelector('#showSizeText .right .firt.border').style.display = 'block';
        document.querySelector('#showSizeText .right .second.border').style.display = 'block';
        document.querySelector('#showSizeText .right .value').style.display = 'block';
        pos_ND1 = getPos('nd1', 0);
        pos_ND3 = getPos('nd3', 0);
        let Element_ngoai;
        let width, height;
        if (Math.min(pos_ND1[0], pos_ND3[0]) == pos_ND1[0]) {
            pos_ND3 = getPos('nd3', 1);
            width = pos_ND3[0] - pos_ND1[0];
            Element_ngoai = 0;
        } else {
            pos_ND1 = getPos('nd1', 1);
            width = pos_ND1[0] - pos_ND3[0];
            Element_ngoai = 1;
        }
        if (Math.min(pos_ND1[1], pos_ND3[1]) == pos_ND1[1]) {
            pos_ND3 = getPos('nd3', 1);
            height = pos_ND3[1] - pos_ND1[1];
        } else {
            pos_ND1 = getPos('nd1', 1);
            height = pos_ND1[1] - pos_ND3[1];
        }
        let action_demo_menu_PC = document.getElementsByClassName('.action_demo_menu');
        let width_show_value;
        let height_show_value;
        if (action_demo_menu_PC === '') {
            width_show_value = Math.ceil(width * 1.5);
            height_show_value = Math.ceil(height * 1.5);
        } else {
            width_show_value = Math.ceil(width / 1.5);
            height_show_value = Math.ceil(height / 1.5);
        }
        let right_Show = document.querySelector('#showSizeText .right');
        let bottom_Show = document.querySelector('#showSizeText .bottom');
        bottom_Show.style.width = width + 'px';
        document.querySelector('#showSizeText .bottom .value').innerHTML = width_show_value + 'cm';
        document.querySelector('#showSizeText .bottom .firt.border').style.width = Math.ceil(width / 2) + 'px';
        document.querySelector('#showSizeText .bottom .second.border').style.width = Math.ceil(width / 2) + 'px';
        right_Show.style.height = height + 40 + 'px';
        document.querySelector('#showSizeText .right .value').innerHTML = height_show_value + 'cm';
        document.querySelector('#showSizeText .right .firt.border').style.height = Math.ceil(height / 2 + 20) + 'px';
        document.querySelector('#showSizeText .right .second.border').style.height = Math.ceil(height / 2) + 'px';
        let width_ofRow = document.getElementById('nd1').offsetHeight;
        if (Element_ngoai === 0) {
            right_Show.style.top = Math.ceil(getPos('nd1', 0)[1] - width_ofRow / 2) + 'px';
            right_Show.style.left = getPos('nd1', 0)[0] - 30 + 'px';
            bottom_Show.style.top = getPos('nd3', 0)[1] + 30 + 'px';
            bottom_Show.style.left = getPos('nd1', 0)[0] + 5 + 'px';
        } else {
            right_Show.style.top = Math.ceil(getPos('nd1', 0)[1] - width_ofRow / 2) + 'px';
            right_Show.style.left = getPos('nd3', 0)[0] - 35 + 'px';
            bottom_Show.style.top = getPos('nd3', 0)[1] + 30 + 'px';
            bottom_Show.style.left = getPos('nd3', 0)[0] + 5 + 'px';
        }
    } else {
        document.getElementById('nd2').style.display = 'none';
        let width, height, left, top_;
        width = GET_W_H_of_ID('nd1')[0];
        height = GET_W_H_of_ID('nd1')[1];
        left = GET_W_H_of_ID('nd1')[2];
        top_ = GET_W_H_of_ID('nd1')[3];
        let action_demo_menu_PC = document.getElementsByClassName('.action_demo_menu');
        let width_show_value;
        let height_show_value;

        if (action_demo_menu_PC === '') {
            width_show_value = Math.ceil(width * 1.5);
            height_show_value = Math.ceil(height * 1.5);
        } else {
            width_show_value = Math.ceil(width / 1.5);
            height_show_value = Math.ceil(height / 1.5);
        }

        let right_Show = document.querySelector('#showSizeText .right');
        let bottom_Show = document.querySelector('#showSizeText .bottom');
        if (action_demo_menu_PC === '' && width_show_value > 70) {
            bottom_Show.style.width = width + 'px';
            document.querySelector('#showSizeText .bottom .value').innerHTML = width_show_value + 'cm';
            document.querySelector('#showSizeText .bottom .firt.border').style.width = Math.ceil(width / 2) + 'px';
            document.querySelector('#showSizeText .bottom .second.border').style.width = Math.ceil(width / 2) + 'px';
            right_Show.style.height = height + 40 + 'px';
            document.querySelector('#showSizeText .right .value').innerHTML = height_show_value + 'cm';
            document.querySelector('#showSizeText .right .firt.border').style.height = Math.ceil(height / 2 + 20) + 'px';
            document.querySelector('#showSizeText .right .second.border').style.height = Math.ceil(height / 2) + 'px';

            right_Show.style.top = Math.ceil(top_ / 2 + 40) + 'px';
            right_Show.style.left = left - 30 + 'px';
            bottom_Show.style.top = Math.ceil(top_ / 2 + 50 + 40) + 'px';
            bottom_Show.style.left = left + 5 + 'px';
        } else {
            bottom_Show.style.top = Math.ceil(top_ / 2 + 50 + 40) + 'px';
            bottom_Show.style.left = left - 30 + 'px';
            document.querySelector('#showSizeText .bottom .firt.border').style.display = 'none';
            document.querySelector('#showSizeText .bottom .second.border').style.display = 'none';
            document.querySelector('#showSizeText .right .firt.border').style.display = 'none';
            document.querySelector('#showSizeText .right .second.border').style.display = 'none';
            document.querySelector('#showSizeText .right .value').style.display = 'none';
            document.querySelector('#showSizeText .bottom ').style.minWidth = 200 + 'px';
            document.querySelector('#showSizeText .bottom .value').innerHTML = width_show_value + 'cm * ' + height_show_value + 'cm';
            document.querySelector('#showSizeText .bottom .value').style.minWidth = 200 + 'px';
        }

    }


}

//mobile
function direct_main_action_mb(CLASS_SHOW, ID_BTN) {

    var user_login = "<?php echo $_SESSION['user_login']; ?>";
    let all_btn = document.querySelectorAll('.main_action_mb .action_demo_menu_child');
    all_btn.forEach(element => {
        element.style.display = 'none';
    });
    if (user_login) {
        let show_class = document.querySelector(CLASS_SHOW);
        show_class.style.display = 'flex';
    } else {
        let show_class = document.querySelector('.mb.none_login');
        show_class.style.display = 'flex';
    }

    let left = document.getElementById(ID_BTN).offsetLeft;
    let width = document.getElementById(ID_BTN).offsetWidth;
    document.querySelector('.glider').style.left = left + 'px';
    document.querySelector('.glider').style.width = Math.ceil(width * 0.7) + 'px';
}
//gia lap e cap nhat kích thuoc
function move_nd3() {
    let mousedownEvent = new MouseEvent("mousedown");
    let mousemoveEvent = new MouseEvent("mousemove");
    let mouseupEvent = new MouseEvent("mouseup");
    document.getElementById('nd3').dispatchEvent(mousedownEvent);
    document.getElementById('nd3').dispatchEvent(mousemoveEvent);
    document.getElementById('nd3').dispatchEvent(mouseupEvent);
}
//mobile
function updatefont_mb_() {
    let all_btn = document.querySelectorAll('.mb.font_box button');
    all_btn.forEach(element => {
        let parent_id_content = document.getElementById(element);
        updatefont_(element.id, element.id.replaceAll('_mb', ''));
    });
}

if (window.innerWidth < 900) {
    default_Design(15, "Font1", "Orange_color");
    // window.onload = move_nd3;
} else
    default_Design(30, "Font1", "Orange_color");
font_ofButton();
updatefont_mb_();
update_content("nd1_content", "nd1");
update_content("nd2_content", "nd2");
update_content("nd3_content", "nd3");

move_demo("nd1");
move_demo("nd2");
move_demo("nd3");

direct_main_action_mb('.mb.content_box', 'select_content_action');