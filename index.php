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
        <section class="form signup">
            <header>Đăng ký</header>
            <p>Nhanh chóng và dễ dàng</p>
            <hr>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Họ</label>
                        <input type="text" name="fname" placeholder="Nhập họ" required>
                    </div>
                    <div class="field input">
                        <label>Tên</label>
                        <input type="text" name="lname" placeholder="Nhập tên" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Địa chỉ email</label>
                    <input type="text" name="email" placeholder="Nhập email" required>
                </div>
                <div class="field input">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" placeholder="Nhập mật khẩu" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Chọn ảnh đại diện</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Đăng ký">
                </div>
            </form>
            <div class="link">Đã có tài khoản? <a href="login.php">Đăng nhập</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>

</html>