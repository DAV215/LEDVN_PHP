function showdata_permission(callback) {
    $.ajax({
        url: "modules/MRP/call-data/call-data-permission.php",
        method: "POST",
        data: { getall_permission: 1 },
        dataType: 'json', // Automatically parse the JSON response
        success: function(response) {
            $('.tbl_permission').DataTable({
                data: response,
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1; // Return row number
                        }
                    },
                    { data: 'permission' }
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
var all_per_code;

function save_permission_arr(e) {
    all_per_code = e;

}
showdata_permission(save_permission_arr);


function show_modal_update() {
    $("#add_permission").modal('show');
}

function permission_add() {
    per = $('input[name="add_permission_val"]').val();
    $.ajax({
        url: "modules/MRP/call-data/call-data-permission.php",
        method: "POST",
        data: {
            permission: per,
            add_per: 1
        },
        dataType: 'json',
        success: function(data) {

        }
    });
    location.reload();
}

function permission_tbl() {
    $.ajax({
        url: "modules/MRP/call-data/call-data-employee.php",
        method: "POST",
        data: { getall_employee: 1 },
        dataType: 'json',
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
                            return `
                            <input class="form-check-input" type="checkbox" id="" value="${row.permission} view">
                                 `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            return `
                            <input class="form-check-input" type="checkbox" id="" value="${row.permission} create">
                                 `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            return `
                            <input class="form-check-input" type="checkbox" id="" value="${row.permission} modify">
                                 `;

                        }
                    }, {
                        data: '', // If you want a third column for actions (assuming the key 'actions' exists)
                        render: function(data, type, row) {
                            return `
                            <input class="form-check-input" type="checkbox" id="" value="${row.permission} del">
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
$(document).ready(function() {

});