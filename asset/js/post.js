function show_post(page) {
    $(".post_list_2").empty();
    $(".more_post").empty();
    $.ajax({
        url: "pages/call_data/call_post.php",
        method: "POST",
        data: {
            get_post_atpage: 1,
            page: page
        },
        dataType: 'json', // Đặt dataType là 'json' để tự động parse kết quả JSON
        success: function(datafrom_server) {
            data = datafrom_server.data_atpage;
            quantity_all = datafrom_server.quantity_all;


            for (let i = 0; i < data.length; i++) {
                let d = data[i];
                let str = `
                    <li class="baiviet_item">
                            <a href="index.php?quanly=chitietbaiviet&danhmuc=${d['danhmucbaiviet']}&idbaiviet=${d['id_baiviet']}">
                                <img src="admincp/modules/quanlybaiviet/uploads/${d['hinhanh']}" alt="">
                                <div class="baiviet_des">
                                    <div class="baiviet_ten">
                                        ${d['tenbaiviet']}
                                    </div>
                                    <div class="baiviet_time">
                                        ${d['ngayviet']}
                                    </div>
                                    <div class="baiviet_tomtat">
                                        ${d['tomtat']}
                                    </div>

                                </div>
                                
                            </a>
                        </li>
                `;

                $(".post_list_2").append(str);
            }
            let btn_total = Math.round(quantity_all / 3);
            for (let i = 0; i <= btn_total; i++) {
                if (i == (page - 1)) {
                    let str = `<button style="opacity:1;" onclick="show_post(${i+1})">${i}</button>`;
                    $(".more_post").append(str);

                } else {
                    let str = `<button onclick="show_post(${i+1})">${i}</button>`;
                    $(".more_post").append(str);

                }
            }

        },
        error: function(xhr, status, error) {
            console.error("Lỗi: " + error);
        }
    });
}
show_post(1);