<?php
session_start();
if ($_SESSION['user'] == "") {
    header("location: ../../login.php");
    exit;
}
$userData = json_decode($_SESSION['user'], true);
include_once('./../../include/_header.php');
?>
<div>
    <h4>เพิ่มผู้ใช้งาน</h4>
    <form action="add_user_action.php" id="form_create" method="post" class="needs-validation" novalidate>
        <div class="row mt-4">
            <div class="col-md-4 mt-3">
                <label for="u_username" class="form-label">Username <span class="text-danger">*</span></label>
                <input type="text" id="u_username" name="u_username" class="form-control" required>
            </div>
            <div class="col-md-4 mt-3">
                <label for="u_password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="text" id="u_password" name="u_password" class="form-control" required>
            </div>
            <div class="col-md-4 mt-3">
                <label for="u_status" class="form-label">สถานะ <span class="text-danger">*</span></label>
                <select class="form-select" id="u_status" name="u_status">
                    <option value="1">ใช้งาน</option>
                    <option value="0">ไม่ใช้งาน</option>
                </select>
            </div>

            <div class="col-md-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary btn-lg">บันทึก</button>
                <button type="reset" class="btn btn-warning btn-lg">ล้างค่า</button>
            </div>
        </div>
    </form>
</div>
<?php include_once('./../../include/_footer.php'); ?>