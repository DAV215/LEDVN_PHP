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
                <div class="header" style="display: ${i == 0 ? 'block' : 'none'}; background-image: url('admincp/modules/quanlybanner/uploads/${d['link_img']}');">
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
let banner_header = 1; // Assuming 1 is the initial index you want to show
let bannerInterval; // Global variable to reference the interval

function startBannerInterval() {
    // Clear the existing interval if it exists
    if (bannerInterval) {
        clearInterval(bannerInterval);
    }

    // Set a new interval
    bannerInterval = setInterval(function() {
        $(".header_container .header").css('display', 'none');
        $(".header_container>.header:nth-child(" + banner_header + ")").show();
        banner_header = (banner_header >= $(".header_container .header").length) ? 1 : (banner_header + 1); // Changed to 1 to fix issues with `nth-child`
    }, 3500);
}

// Start the interval for the first time
startBannerInterval();

function prev_hd_banner() {
    $(".header_container .header").css('display', 'none');
    banner_header = (banner_header <= 1) ? $(".header_container .header").length : (banner_header - 1);
    $(".header_container>.header:nth-child(" + banner_header + ")").show();

    // Reset the timer
    startBannerInterval();
}

function next_hd_banner() {
    $(".header_container .header").css('display', 'none');
    banner_header = (banner_header >= $(".header_container .header").length) ? 1 : (banner_header + 1);
    $(".header_container>.header:nth-child(" + banner_header + ")").show();

    // Reset the timer
    startBannerInterval();
}