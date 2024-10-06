$.ajax({
    url: "pages/call_data/call_banner.php",
    method: "POST",
    data: { getall_banner: 1 },
    dataType: 'json', // Đặt dataType là 'json' để tự động parse kết quả JSON
    success: function(data) {
        $(".header_container").empty();
        for (let i = 0; i < data.length; i++) {
            let d = data[i];
            let str = `
                <div class="header" style="display: ${i == 0 ? 'block' : 'none'}; background-image: url('asset/images/banner_header/${d['link_img']}');">
                    <div class="mark_header"></div>
                    <div class="main_hd">
                        <ul class="header_item_content">
                            <li class="content_text">
                                <h1 class="title">${d['title']}</h1>
                                <h2 class="content">${d['content']}</h2>
                            </li>
                        </ul>
                    </div>
                </div>
            `;

            $(".header_container").append(str);
        }

    },
    error: function(xhr, status, error) {
        console.error("Lỗi: " + error);
    }
});
var banner_header = 0;
setInterval(function() {
    $(".header_container .header").css('display', 'none');
    $(".header_container>.header:nth-child(" + banner_header + ")").show();
    banner_header = (banner_header >= $(".header_container .header").length) ? 1 : (banner_header + 1);
}, 5000);

function prev_hd_banner() {
    $(".header_container .header").css('display', 'none');
    banner_header = (banner_header < 2) ? ($(".header_container .header").length) : (banner_header - 1);
    $(".header_container>.header:nth-child(" + banner_header + ")").show();
}

function next_hd_banner() {
    $(".header_container .header").css('display', 'none');
    banner_header = (banner_header >= $(".header_container .header").length) ? 1 : (banner_header + 1);
    $(".header_container>.header:nth-child(" + banner_header + ")").show();
    console.log(banner_header);
}