<script src="assets/js/department.js"></script>
<div class="department_show hover">
    <h1>Quản lý danh mục các phòng ban</h1>
    <table class="dark tbl_department hover datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Phòng ban</th>
                <th>Chức vụ</th>
                <th>Tác vụ</th>
            </tr>
        </thead>

    </table>

    <button id="addRowButton_department">+</button>
    <!-- Modal -->
<div class="modal fade" id="ex1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div style="display: flex; flex-direction: column; align-items: center;    gap: 20px;">
                    <input type="hidden" name="id" >
                    <input style="width:100%; border: none; border-bottom: 1px solid black;" type="text" name="department" placeholder="department">
                    <input style="width:100%; border: none; border-bottom: 1px solid black;" type="text" name="title" placeholder="titlte">
                <button style="width:50%; border: none; "  onclick="department_update()">Lưu</button>

                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>
</div>
<div id="ex1" class="modal">
    <span>Sửa đổi phòng ban</span>
    <div style="display: flex; flex-wrap:nowrap;">
        <input type="text" name="department" placeholder="department">
        <input type="text" name="title" placeholder="titlte">
    </div>
    <button onclick="department_update()">Lưu</button>
</div>
