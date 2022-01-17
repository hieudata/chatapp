<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>
<?php include_once "header.php"; ?>

<body>
    <div class="body">
        <img src="viber.png" alt="" style="width: 100px; height: 100px; margin-bottom: 20px;">
        <h2>Kết nối với những người bạn yêu quý.</h2>
    </div>
    <div class="wrapper">
        <section class="form login">
            <header>Đăng nhập</header>
            <hr>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Nhập email" required>
                </div>
                <div class="field input">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" placeholder="Nhập password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Đăng nhập">
                </div>
            </form>
            <div class="link">Bạn chưa có tài khoản? <a href="index.php">Đăng ký ngay</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

</body>

</html>