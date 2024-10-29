function show_production(category, page) {
    $(".product_list").empty();
    $(".more_page").empty();
    $.ajax({
        url: "pages/call_data/call_production.php",
        method: "POST",
        data: {
            product_category: category,
            get_production_atpage: 1,
            page: page
        },
        dataType: 'json', // Đặt dataType là 'json' để tự động parse kết quả JSON
        success: function(datafrom_server) {
            data = datafrom_server.data_atpage;
            quantity_all = datafrom_server.quantity_all;
            for (let i = 0; i < data.length; i++) {
                let d = data[i];
                let str = `
                    <li class="product_item">
                        <a href="index.php?quanly=chitietsp&danhmuc=${d['danhmucsanpham']}&idsanpham=${d['id_sanpham']}">
                            <div class="product_pic">
                            <img src="admincp/modules/quanlysanpham/uploads/${d['hinhanh']}" alt="">

                            </div>
                            <div class="btn_detail">
                                    <button>Chi tiết</button>
                                </div>
                            <div class="product_des">
                                <p class="product_item_name">    ${d['tensp']}</p>
                                <p class="product_item_size">KT: ${d['kichthuoc']}</p>
            
                            </div>
                        </a>
                    </li>
                `;

                $(".product_list").append(str);
            }
            let btn_total = Math.ceil(quantity_all / 8);
            for (let i = 0; i < btn_total; i++) {
                if (i == (page - 1)) {
                    let str = `<button style="opacity:1;" onclick="show_production(product_category,${i+1})">${i}</button>`;
                    $(".more_page").append(str);

                } else {
                    let str = `<button onclick="show_production(product_category,${i+1})">${i}</button>`;
                    $(".more_page").append(str);

                }
            }

        },
        error: function(xhr, status, error) {
            console.error("Lỗi: " + error);
        }
    });
}
const url = window.location.href;
const idMatch = url.match(/[?&]id=([^&#]*)/);
var product_category = idMatch ? decodeURIComponent(idMatch[1]) : null;
show_production(product_category, 1);