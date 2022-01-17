<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<?php include_once "header.php"; ?>

<body>
    <div class="wrapper" style="
    max-width: 900px;">
        <section class="chat-area">
            <header>
                <?php
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                } else {
                    header("location: users.php");
                }
                ?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?php echo $row['img']; ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>
                <div class="icon">
                    <i class="fas fa-search"></i>
                    <i class="fas fa-phone"></i>
                    <i class="fas fa-video"></i>
                    <i class="fas fa-ellipsis-h" style="background-color: #6f3faa; color: white; padding: 8px; border-radius: 50%"></i>
                </div>
            </header>
            
            <div class="chat-box">
            </div>
            <form action="#" class="typing-area">
                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Nhập tin nhắn" autocomplete="off">
                <button><i class="fab fa-telegram-plane"></i></button>
                <div class="icon">
                    <i class="fas fa-image"></i>
                    <i class="fas fa-sticky-note"></i>
                    <i class="fas fa-plus-circle"></i>
                </div>
            </form>
        </section>
    </div>

    <script src="javascript/chat.js"></script>

</body>

</html>