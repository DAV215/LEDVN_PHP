<script src="assets/js/employee.js"></script>
<div class="department_show hover">
    <h2>Thêm nhân viên</h2>
    <div class="add_erea">
        <form id="add_employee">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form6Example1" class="form-control" name="first_name" />
                        <input type="hidden" id="" class="form-control" name="add_empl" value="1" />
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
                <div class="col">
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form6Example6" class="form-control" name="password" />
                        <label class="form-label" for="form6Example6">password</label>
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
                        <input type="file" class="form-control" id="avt" name="avt_file"
                            onchange="document.getElementById('pre_img').src = window.URL.createObjectURL(this.files[0])" />
                    </div>
                </div>
                <div class="col">
                    <img src="" style="max-height: 300px; border-radius: 50%; aspect-ratio: 1;" id="pre_img" alt="">
                </div>
            </div>
            <!-- Submit button -->
            <button data-mdb-ripple-init type="button" onclick="employee_sentdata()"
                class="btn btn-primary btn-block mb-4">Lưu thông tin</button>
        </form>
    </div>
</div>