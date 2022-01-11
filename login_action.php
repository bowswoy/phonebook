<?php
session_start();
include_once("./include/function.php");
$conn = connectDB();

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM user WHERE u_username = '$username' AND u_password = MD5('$password') AND u_status = 1";
$query = mysqli_query($conn, $sql);
if($query) {
    $row = mysqli_num_rows($query);
    if($row) {
        $rs = mysqli_fetch_assoc($query);
        $_SESSION['user'] = json_encode(array('id' => $rs['u_id'], 'u_username' => $rs['u_username']));
        header('location: index.php');
    } else {
        echo '<script>alert("username or password incorrect");window.location="login.php";</script>';
    }
}