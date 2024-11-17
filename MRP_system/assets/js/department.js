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
                            <td>${i}</td>
                            <td>${d['department']}</td>
                            <td>${d['title']}</td>

                            <td class="tacvu">
                                <button onclick="department_del(${d['id']})" >Xóa</button>
                                
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

function showdata2() {
    $.ajax({
        url: "modules/MRP/call-data/call-data-department.php",
        method: "POST",
        data: { getall_department: 1 },
        dataType: 'json', // Automatically parse the JSON response
        success: function(response) {
            $('.tbl_department').DataTable({
                data: response,
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // Return row number
                        }
                    },
                    { data: 'department' }, // Assuming 'department' is the key for the department name
                    { data: 'title' }, // Assuming 'title' is some title you want to display
                    {
                        data: 'actions', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            return `
                                  <a style="color: red"   onclick="department_del(${row.id})"><i class="fa-solid fa-trash"></i></a>
                                <button style="color: blue" onclick="show_modal_update('${row.id}','${row.department}', '${row.title}')"><i class="fa-solid fa-file-pen "></i></button>
                           
                                 `;

                        }
                    }
                ],

                paging: true,
                searching: true,
                ordering: true,
                order: [
                    [1, 'asc']
                ],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },

            })
        },
        error: function(xhr, status, error) {
            console.error("Lỗi: " + error);
            console.error("HTTP Status: " + xhr.status);
            console.error("Response Text: " + xhr.responseText);
        }
    });

}
showdata2();



function show_modal_update(id, dp, tl) {
    $('#ex1 input[name="id"]').val(id);
    $('#ex1 input[name="department"]').val(dp);
    $('#ex1 input[name="title"]').val(tl);
    $("#ex1").modal('show');
}

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
    location.reload();

}

function department_update() {
    id = $('#ex1 input[name="id"]').val();
    department = $('#ex1 input[name="department"]').val();
    title = $('#ex1 input[name="title"]').val();
    $.ajax({
        url: "modules/MRP/call-data/call-data-department.php",
        method: "POST",
        data: {
            id: id,
            department: department,
            title: title,
            update: 1
        },
        dataType: 'json',
        success: function(data) {
            if (data.success) { // Assuming `data.success` indicates success
                // Reload the page if successful    
            }
        }
    });
    location.reload();
}

function department_del(id) {
    let cf = "Xác nhận xóa ?";
    if (confirm(cf) == true) {
        $.ajax({
            url: "modules/MRP/call-data/call-data-department.php",
            method: "POST",
            data: {
                id: id,
                del: 1
            },
            dataType: 'json',
            success: function(data) {},
            error: function(xhr, status, error) {
                window.alert(xhr.responseText);
                console.error("Lỗi: " + error);
                console.error("HTTP Status: " + xhr.status);
                console.error("Response Text: " + xhr.responseText);
            }
        });
    }
    location.reload();

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