function employee_sentdata() {
    $.ajax({
        url: "modules/MRP/call-data/call-data-employee.php",
        type: "POST",
        data: new FormData($('#add_employee')[0]),
        processData: false,
        contentType: false,
        success: function(data) {
            reload_p(1);
        }
    });
}

function showdata_employee(callback) {
    $.ajax({
        url: "modules/MRP/call-data/call-data-employee.php",
        method: "POST",
        data: { getall_employee: 1 },
        dataType: 'json',
        success: function(response) {
            $('.tbl_employee').DataTable({
                data: response,
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    { data: 'username' },

                    {
                        data: 'full_name',
                        render: function(data, type, row) {
                            return `${row.first_name} ${row.name}`;

                        }
                    }, // Assuming 'department' is the key for the department name
                    { data: 'department' },
                    { data: 'title' },
                    { data: 'phone_number' },
                    { data: 'gmail' },
                    { data: 'birth_day' },
                    { data: 'address' },
                    {
                        data: 'img', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            return `  
                                <img src="modules/MRP/${row.avt_dir}" style="max-height: 300px; border-radius: 50%; aspect-ratio: 1;" class="img-thumbnail" id="pre_img" alt=""> 
                               
                            `;

                        }
                    },
                    {
                        data: 'actions', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            return `

                            <a style="color: red"   onclick="employee_del(${row.id})"><i class="fa-solid fa-trash"></i></a>
                            <button style="color: blue" onclick="show_modal_update_empl('${row.id}')"><i class="fa-solid fa-file-pen "></i></button>
                            <button style="color: blue" onclick="show_modal_update_empl_permission('${row.id}')"><i class="fa-solid fa-unlock"></i></i></button>

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
            callback(response);
        },
        error: function(xhr, status, error) {
            console.error("Lỗi: " + error);
            console.error("HTTP Status: " + xhr.status);
            console.error("Response Text: " + xhr.responseText);
        }
    });

}
var data_all_employee;

function save_data_fromsever(e) {
    data_all_employee = e;
}

function employee_del(id) {


    let cf = "Xác nhận xóa ?";
    if (confirm(cf) == true) {
        $.ajax({
            url: "modules/MRP/call-data/call-data-employee.php",
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

function show_modal_update_empl(id) {
    let e = data_all_employee.find(item => item.id === id);
    $('#modify_employee input[name="id_empl"]').val(e.id);
    $('#modify_employee input[name="first_name"]').val(e.first_name);
    $('#modify_employee input[name="name"]').val(e.name);
    $('#modify_employee input[name="phone"]').val(e.phone_number);
    $('#modify_employee input[name="id_department"]').val(e.id_department);
    $('#modify_employee input[name="address"]').val(e.address);
    $('#modify_employee input[name="mail"]').val(e.gmail);
    $('#modify_employee input[name="start_day"]').val(e.start_day);
    $('#modify_employee input[name="birth_day"]').val(e.birth_day);
    $('#modify_employee input[name="username"]').val(e.username);

    $('#modify_employee textarea[name="additional_info"]').val(e.additional_info);
    if (e.avt_dir) {
        let previewImage = $('#pre_img_modify');
        previewImage.attr('src', 'modules/MRP/' + e.avt_dir);

    }
    $("#modal_modify_empl").modal('show');
}

function show_modal_update_empl_permission(id) {
    getall_permission_user(save_permission_user, id);
    update_permission_user_tbl();
    $("#change_permission .info").html('');
    $("#change_permission .btn").html('');
    $("#change_permission .info").append('<input type="hidden" class="form-control" name="id_user" value="' + id + '" />');
    $("#change_permission .info").append('<input type="hidden" class="form-control" name="modify_rule_for_empl" value="1" />');
    $("#change_permission .btn").append('<button data-mdb-ripple-init  class="btn btn-primary btn-block mb-4" type="button" onclick="employee_update_permission()">Lưu quyền</button>');
    $("#modal_modify_per_eml").modal('show');

}

function employee_update() {
    let cf = "Xác nhận bổ sung thông tin nhân sự ?";
    if (confirm(cf) == true) {
        $.ajax({
            url: "modules/MRP/call-data/call-data-employee.php",
            type: "POST",
            data: new FormData($('#modify_employee')[0]),
            processData: false,
            contentType: false,
            success: function(data) {
                reload_p(1);
            }
        });
    }

}

function employee_update_permission() {

    $.ajax({
        url: "modules/MRP/call-data/call-data-permission.php",
        type: "POST",
        data: new FormData($('#change_permission')[0]),
        processData: false,
        contentType: false,
        success: function(data) {
            reload_p(1);
        }
    });
}
$(document).ready(function() {
    $.ajax({
        url: "modules/MRP/call-data/call-data-department.php",
        method: "POST",
        data: { getall_department: 1 },
        dataType: 'json',
        success: function(response) {
            let datalist = document.getElementById('dept_data');
            datalist.innerHTML = " "; // Clear existing options
            // Populate the datalist with the "name" values from the materials

            for (var count = 0; count < response.length; count++) {
                var option = document.createElement("option");
                option.value = response[count].id;
                option.textContent = response[count].department + " - " + response[count].title;
                datalist.appendChild(option);
            }
        },
        error: function() {
            alert("An error occurred while fetching departments. Please try again.");
        }
    });
    showdata_employee(save_data_fromsever);

});

function reload_p(e) {
    if (e) {
        location.reload();
    }
}

function encode_rule(per) {
    return
}

function add_permission_tbl() {
    $.ajax({
        url: "modules/MRP/call-data/call-data-permission.php",
        method: "POST",
        data: { getall_permission: 1 },
        dataType: 'json', // Automatically parse the JSON response
        success: function(response) {
            $('.permission_tick').DataTable({
                data: response,
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // Return row number
                        }
                    },
                    { data: 'permission' }, // Assuming 'department' is the key for the department name
                    {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            encode = md5(row.permission + ' view');
                            return `
                    <input class="form-check-input" type="checkbox"  name="${encode}">
                         `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            encode = md5(row.permission + ' create');
                            return `
                    <input class="form-check-input" type="checkbox"  name="${encode}">
                         `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            encode = md5(row.permission + ' modify');
                            return `
                                        <input class="form-check-input" type="checkbox"  name="${encode}">
                         `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            encode = md5(row.permission + ' del');
                            return `
                                        <input class="form-check-input" type="checkbox"  name="${encode}">
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

        }
    })
}

function checkrule(rulearr, val) {
    if (rulearr) {
        if (rulearr.hasOwnProperty(val)) {
            return 'checked';
        }
    }

}

function update_permission_user_tbl() {
    $.ajax({
        url: "modules/MRP/call-data/call-data-permission.php",
        method: "POST",
        data: { getall_permission: 1 },
        dataType: 'json', // Automatically parse the JSON response
        success: function(response) {
            $('#DataTables_Table_1').DataTable().destroy();
            $('.permission_tick').DataTable({
                data: response,
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // Return row number
                        }
                    },
                    { data: 'permission' }, // Assuming 'department' is the key for the department name
                    {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            encode = md5(row.permission + ' view');
                            return `
                    <input class="form-check-input" type="checkbox"  name="${encode}" ${checkrule(permissonOFuser,encode)}>
                         `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            encode = md5(row.permission + ' create');
                            return `
                    <input class="form-check-input" type="checkbox"  name="${encode}" ${checkrule(permissonOFuser,encode)}>
                         `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            encode = md5(row.permission + ' modify');
                            return `
                                        <input class="form-check-input" type="checkbox"  name="${encode}" ${checkrule(permissonOFuser,encode)}>
                         `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            encode = md5(row.permission + ' del');
                            return `
                                        <input class="form-check-input" type="checkbox"  name="${encode}" ${checkrule(permissonOFuser,encode)}>
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

        }
    })
}

function getall_permission_user(callback, id) {
    $.ajax({
        url: "modules/MRP/call-data/call-data-permission.php",
        method: "POST",
        data: { get_permission_user: 1, id_user: id },
        dataType: 'json', // Automatically parse the JSON response
        success: function(response) {
            callback(response);
        }
    })
}
var permissonOFuser;

function save_permission_user(e) {
    permissonOFuser = e;
}