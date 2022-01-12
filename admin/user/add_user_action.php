<?php
include_once('./../../include/function.php');

$conn = connectDB();

$username = mysqli_real_escape_string($conn, $_POST['u_username']);
$password = mysqli_real_escape_string($conn, $_POST['u_password']);
$status = mysqli_real_escape_string($conn, $_POST['u_status']);

$sql = "INSERT INTO user(u_username, u_password, u_status) VALUES('$username', MD5('$password'), $status)";
$query = mysqli_query($conn, $sql);
if($query) {
    echo '<script>alert("บันทึกสำเร็จ");window.location="add_user.php";</script>';
}