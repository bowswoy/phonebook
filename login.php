<?php include_once('./include/_header.php'); ?>
<div class="mt-3">
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="images/logo.png" class="img-thumbnail w-75 border-0" alt="logo" />
        </div>
        <div class="col-md-6">
            <div class="form-signin">
                <form>
                    <h1 class="h3 mb-3 fw-normal text-center">ระบบยืนยันตัวตน</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once('./include/_footer.php'); ?>