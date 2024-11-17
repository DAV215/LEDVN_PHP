<script src="assets/js/employee.js"></script>
<div class=" hover">
    <h1>Quản lý nhân viên</h1>
    <table class=" table tbl_employee hover datatable align-middle">
        <thead class="table-dark align-middle justify-content-center">
            <tr>
                <th>STT</th>
                <th>Username</th>
                <th>Tên</th>
                <th>Chức vụ</th>
                <th>Phòng ban</th>
                <th>SDT</th>
                <th>Gmail</th>
                <th>Birth day</th>
                <th>Add</th>
                <th>AVT</th>
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
                        <input type="hidden" name="id">
                        <input style="width:100%; border: none; border-bottom: 1px solid black;" type="text"
                            name="department" placeholder="department">
                        <input style="width:100%; border: none; border-bottom: 1px solid black;" type="text"
                            name="title" placeholder="titlte">
                        <button style="width:50%; border: none; " onclick="department_update()">Lưu</button>

                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
    require ("modules/MRP/call-data/data.php");
    $e = new employee();
    $id_user_now = $_SESSION['user'][0]['id'];
    if($e->checkrule("employee modify", $id_user_now)){
?>
    <div class="modal fade" id="modal_modify_empl" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bổ sung thông tin nhân sự</h4>
                </div>
                <div class="modal-body">
                    <form id="modify_employee">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form6Example1" class="form-control" name="first_name" />
                                    <input type="hidden" id="" class="form-control" name="mod_empl" value="1" />
                                    <input type="hidden" id="" class="form-control" name="id_empl" value="1" />
                                    <label class="form-label" for="form6Example1">First name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="form6Example2" class="form-control" name="name" />
                                    <label class="form-label" for="form6Example2">Last name</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" id="form6Example3" class="form-control" name="phone" />
                                    <label class="form-label" for="form6Example3">Phone number</label>
                                </div>
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" id="id_department" class="form-control" name="id_department"
                                        list="dept_data" />
                                    <datalist id="dept_data">

                                    </datalist>
                                    <label class="form-label" for="id_department">Department</label>
                                </div>
                            </div>
                        </div>
                        <!-- Text input -->


                        <!-- Text input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="form6Example4" class="form-control" name="address" />
                            <label class="form-label" for="form6Example4">Address</label>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="mail" id="form6Example4" class="form-control" name="mail" />
                            <label class="form-label" for="form6Example4">Gmail</label>
                        </div>
                        <!-- Email input -->

                        <div class="row mb-4">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="datetime-local" id="form6Example6" class="form-control" name="start_day" />
                                    <label class="form-label" for="form6Example6">Start days</label>
                                </div>
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="datetime-local" id="form6Example6" class="form-control" name="birth_day" />
                                    <label class="form-label" for="form6Example6">Birth days</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" id="form6Example6" class="form-control" name="username" />
                                    <label class="form-label" for="form6Example6">Username</label>
                                </div>
                            </div>

                        </div>


                        <!-- Message input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                            <label class="form-label" for="form6Example7">Additional information</label>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <!-- img -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="avt">Avatar</label>
                                    <input type="file" class="form-control" id="avt" name="mod_avt_file"
                                        onchange="document.getElementById('pre_img_modify').src = window.URL.createObjectURL(this.files[0])" />
                                </div>
                            </div>
                            <div class="col">
                                <img src="" style="max-height: 300px; border-radius: 50%; aspect-ratio: 1;"
                                    id="pre_img_modify" alt="">
                            </div>
                        </div>
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="button" onclick="employee_update()"
                            class="btn btn-primary btn-block mb-4">Lưu thông tin</button>
                    </form>

                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>
    </div>
<?php
    }
    if($e->checkrule("permission modify", $id_user_now)){
        ?>
    <div class="modal fade" id="modal_modify_per_eml" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Adjust to modal-lg or modal-xl for larger width -->
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bổ sung thông tin nhân sự</h4>
                </div>
                <div class="modal-body">
                    <form id="change_permission">
                        <div class="table-responsive">
                            <table class="permission_tick table table-hover table-striped align-middle w-100">
                                <thead class="table-dark align-middle text-center">
                                    <tr>
                                        <th>STT</th>
                                        <th>Permission</th>
                                        <th>View</th>
                                        <th>Create</th>
                                        <th>Modify</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn">

                        </div>
                        <div class="info">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>

<script src="
https://cdn.jsdelivr.net/npm/md5-js@0.0.3/md5.min.js
"></script>