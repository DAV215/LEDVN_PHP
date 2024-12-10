function showdata() {
    $.ajax({
        url: "modules/MRP/call-data/call-data-department.php",
        method: "POST",
        data: { getall_department: 1 },
        dataType: 'json', // Automatically parse the JSON response
        success: function(data) {

            for (let i = 0; i < data.length; i++) {
                let d = data[i];
                let str = `

                        <tr>
                            <td>${d['id']}</td>
                            <td>${d['department']}</td>
                            <td>${d['title']}</td>

                            <td class="tacvu">
                                <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet']?>">Xóa</a>
                                
                                <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a>
                            </td>
                        </tr>
                `;

                $(".tbl_department").append(str);
            }
        },
        error: function(xhr, status, error) {
            console.error("Lỗi: " + error);
            console.error("HTTP Status: " + xhr.status);
            console.error("Response Text: " + xhr.responseText);
        }
    });
}
showdata();

function department_sentdata(department, title) {
    $.ajax({
        url: "modules/MRP/call-data/call-data-department.php",
        method: "POST",
        data: {
            department: department,
            title: title,
            add_department: 1
        },
        dataType: 'json',
        success: function(data) {

        }
    });
}

function department_update(department, title) {
    $.ajax({
        url: "modules/MRP/call-data/call-data-department.php",
        method: "POST",
        data: {
            department: department,
            title: title,
            add_department: 1
        },
        dataType: 'json',
        success: function(data) {

        }
    });
}
$(document).ready(function() {
    $('#addRowButton_department').on('click', function() {
        let rowCount = $('.tbl_department tr').length;
        $('.tbl_department').append(`
            <tr>
                <td>${rowCount}</td>
                <td><input type="text" name="department_add" placeholder="Department"></td>
                <td><input type="text" name="title_add" placeholder="Title"></td>
                <td><button type="button" onclick="saveData(this)">Lưu</button></td>
            </tr>
        `);
    });
    $('.tbl_department').on('keypress', 'td input', function(e) {
        if (e.which === 13) { // Check if Enter key is pressed
            let inputs = $(this).closest('tr').find('input');
            let department = inputs.first().val();
            let title = inputs.last().val();
            if (department && title) {
                department_sentdata(department, title);
                let rowCount = $('.tbl_department tr').length;
                $('.tbl_department').append(`
                    <tr>
                        <td>${rowCount}</td>
                        <td><input type="text" name="department_add" placeholder="Department" ></td>
                        <td><input type="text" name="title_add" placeholder="Title"></td>
                        <td><button type="button" onclick="saveData(this)">Lưu</button></td>
                    </tr>
                `);

            } else {
                alert('Please fill in all fields!');
            }
        }
    });


});