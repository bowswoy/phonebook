<?php
session_start();
if ($_SESSION['user'] == "") {
    header("location: login.php");
    exit;
}
$userData = json_decode($_SESSION['user'], true);
include_once('./include/_header.php');
?>
<div class="alert alert-success" role="alert">
    <h4><?php echo $userData['u_username']; ?></h4>
    <a href="logout_action.php" class="btn btn-danger">ออกจากระบบ</a> 
    <a href="admin/user/add_user.php" class="btn btn-primary">เพิ่มผู้ใช้งาน</a>
</div>

<div class="mt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="form-signin">
                <form>
                    <!-- <h1 class="h3 mb-3 fw-normal text-center">ระบบยืนยันตัวตน</h1> -->
                    <div class="mb-1 row">
                        <label for="input_Name" class="col-sm-4 col-form-label">ชื่อ - สกุล</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="input_TelOff" class="col-sm-4 col-form-label">เบอร์ สนง.</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="input_Mobile" class="col-sm-4 col-form-label">เบอร์มือถือ</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="input_Line" class="col-sm-4 col-form-label">Id line</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mb-1 row">
                        <label for="input_mail" class="col-sm-4 col-form-label">E-mail</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        </div>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                </form>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="mb-3">
                <!-- <label for="formFile" class="form-label">Default file input example</label> -->
                <input class="form-control" type="file" id="formFile">
            </div>
            <img src="images/logo.png" class="img-thumbnail w-50 border-0" alt="logo" />

        </div>

    </div>
</div>

<?php include_once('./include/_footer.php'); ?>