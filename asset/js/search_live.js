var timeout = null;

if ($(window).width() > 768) {
    $('#search_content').mouseover(
        function() {
            $('.search_modal').css({ "display": " block" });
        }
    );

    $(window).scroll(function() {
        $('.search_modal').hide();
    });
    $('#search_content').on('input', function() {
        $('.search_modal').css({ "display": " block" });

    });
}
if ($(window).width() < 768) {
    let lastScrollTop = 0;

    $(window).scroll(function(event) {
        let st = $(this).scrollTop();
        if (st > lastScrollTop) {
            // Nếu cuộn xuống
            $('.search_modal').hide();
            $('.menu').hide();
            $(' #content_menu_moblie').hide();

        } else {

            $(' #menu_mb').show();
        }
        lastScrollTop = st;
    });


}




function live_search() {
    // Clear the previous timeout if it exists

    if (timeout) {
        clearTimeout(timeout);
    }

    // Set a new timeout
    timeout = setTimeout(function() {
        $(".search_item_wrapper").empty();
        $(".more_search").empty();
        let content = $("#menu #search_content").val();
        if ($(window).width() < 768) {
            content = $("#menu_mb #search_content").val();
        }
        $.ajax({
            url: "pages/call_data/call_live_search.php",
            method: "POST",
            data: {
                live_search: 1,
                key: content
            },
            dataType: 'json', // Đặt dataType là 'json' để tự động parse kết quả JSON
            success: function(data) {
                for (let i = 0; i < data.length; i++) {
                    let d = data[i];
                    let str = `
                        <a href="index.php?quanly=chitietsp&danhmuc=${d['danhmucsanpham']}&idsanpham=${d['id_sanpham']}" class="child_search" style="display: ${i < 5 ? 'flex' : 'none'};">
                            <div class="child_content">
                                <span class="item_name">${d['tensp']}</span>
                                <span>${d['kichthuoc']}</span>
                            </div>
                            <div class="child_img">
                                <img src="admincp/modules/quanlysanpham/uploads/${d['hinhanh']}" alt="">
                            </div>
                        </a>
                    `;
                    $(".search_item_wrapper").append(str);
                }
                let btn_total = Math.round(data.length / 5);
                for (let i = 1; i <= btn_total; i++) {
                    let str = `<button onclick="show_more_search(this)">${i}</button>`;
                    $(".more_search").append(str);
                }
            },
            error: function(xhr, status, error) {
                console.error("Lỗi: " + error);
            }
        });
    }, 500);
}

function show_more_search(obj) {
    let btn_now = obj.textContent;
    $(".search_item_wrapper .child_search").hide();
    for (let i = (btn_now - 1) * 5; i < btn_now * 5; i++) {
        $(".search_item_wrapper .child_search:nth-child(" + i + ")").show();
    }
}