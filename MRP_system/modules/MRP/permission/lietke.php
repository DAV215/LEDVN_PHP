<script src="assets/js/permission.js"></script>
<h2>Quản lý phân quyền</h2>
<table class=" table tbl_permission hover datatable align-middle">
    <thead class="table-dark align-middle justify-content-center">
        <tr>
            <th>STT</th>
            <th>Permission</th>


        </tr>
    </thead>

</table>

<button id="addRowButton_permission" onclick="show_modal_update()">+</button>
<!-- Modal -->
 <form action="">
    
 </form>
<div class="modal fade" id="add_permission" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm danh mục tạo quyền</h4>
            </div>
            <div class="modal-body">
                <div style="display: flex; flex-direction: column; align-items: center;    gap: 20px;">

                    <input style="width:100%; border: none; border-bottom: 1px solid black;" type="text"
                        name="add_permission_val" placeholder="permission">

                    <button style="width:50%; border: none; " onclick="permission_add()">Lưu</button>

                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>
