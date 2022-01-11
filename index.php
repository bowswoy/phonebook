<?php include_once('./include/_header.php'); ?>
<?php
if (!$_SESSION['user'])
    echo '<script>window.location="login.php";</script>';

?>
<h4><?php echo $_SESSION['user']; ?></h4>
<a href="logout_action.php" class="btn btn-danger">ออกจากระบบ</a>
<?php include_once('./include/_footer.php'); ?>