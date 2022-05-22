<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí tài khoản</title>
    <link rel="stylesheet" href="./source/css/login-signup.css">
    <link rel="stylesheet" href="./source/css/base.css">
    <link rel="stylesheet" href="./source/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/new-lgoteam.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Roboto:wght@100;300;400;500;700&display=swap');
    </style>
    <script>
        function errorHandling() {
            let messageBox = document.querySelector('.error-message');
            let usernameErrorMessage = "Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác hoặc đi tới trang <a href='login.php'>đăng nhập</a>.";
            let emailErrorMessage = "Email không hợp lệ. Vui lòng nhập lại.";
            let emailExistedErrorMessage = "Email này đã được đăng kí. Vui lòng chọn Email khác hoặc đi tới trang <a href='login.php'>đăng nhập</a>.";
            let passwordErrorMessage = "Mật khẩu không khớp. Vui lòng nhập lại.";

            if (typeof usernameError === 'undefined' &&
                typeof emailError === 'undefined' &&
                typeof existedEmailError === 'undefined' &&
                typeof passwordError === 'undefined') {
                messageBox.style.display = 'none';
            } else {
                if (typeof usernameError !== 'undefined') {
                    createElement('p', usernameErrorMessage, messageBox);
                }
                if (typeof emailError !== 'undefined') {
                    createElement('p', emailErrorMessage, messageBox);
                }
                if (typeof existedEmailError !== 'undefined') {
                    createElement('p', emailExistedErrorMessage, messageBox);
                }
                if (typeof passwordError !== 'undefined') {
                    createElement('p', passwordErrorMessage, messageBox);
                }
            }
        }

        function createElement(tag, content, parent) {
            var e = document.createElement(tag);
            e.innerHTML = content;
            parent.appendChild(e);
        }
    </script>
</head>

<body onload="errorHandling();">
    <div class=" form-container">
        <div class="form">
            <span class="title">Đăng kí</span>
            <div class="error-message">
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input-field">
                    <input type="text" name="Username" placeholder="Nhập tên đăng nhập" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-field">
                    <input type="email" name="Email" placeholder="Nhập email" required>
                    <i class="fa-solid fa-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="Password" placeholder="Nhập mật khẩu" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="Repassword" placeholder="Nhập lại mật khẩu" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <input class="btn btn-filled" type="submit" value="Đăng kí" required>
            </form>
            <p class="display-block">Đã có tài khoản? <a href="login.php" class="text signup-text">Đăng nhập</a>.</p>
        </div>
    </div>
</body>

</html>
<?php
// lấy dữ liệu từ client
if ($_SERVER["REQUEST_METHOD"] != "POST" && !isset($_POST['Username']) && !isset($_POST['Email']) && !isset($_POST['Password']) && !isset($_POST['Repassword']))
    return;

//Nhúng file kết nối với database
$conn = mysqli_connect("localhost", "root", "", "hethongthitienganh");
mysqli_query($conn, "SET NAMES 'utf8'");

//Lấy dữ liệu từ file dangky.php
$username   = $_POST['Username'];
$email      = $_POST['Email'];
$password   = $_POST['Password'];
$repassword   = $_POST['Repassword'];

// Mã hóa mật khẩu
$password = md5($password);
$repassword = md5($repassword);

//Kiểm tra tên đăng nhập này đã có người dùng chưa
$command = "SELECT `TenDangNhap` FROM `nguoidung` WHERE `TenDangNhap` = '$username'";
$result = mysqli_query($conn, $command);
if (mysqli_num_rows($result) > 0) {
    echo '<script>var usernameError = true</script>';
    exit;
}

//Kiểm tra email có đúng định dạng hay không
if (!preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/", $email)) {
    echo '<script>var emailError = true</script>';
    exit;
}
$command1 = "SELECT `Email` FROM `nguoidung` WHERE `Email`='$email'";
$result1 = mysqli_query($conn, $command1);
//Kiểm tra email đã có người dùng chưa
if (mysqli_num_rows($result1) > 0) {
    echo '<script>var existedEmailError = true</script>';
    exit;
}
if ($password != $repassword) {
    echo '<script>var passwordError = true</script>';
    exit;
}
//Lưu thông tin thành viên vào bảng
$add = "INSERT INTO `nguoidung` (`TenDangNhap`, `Email`, `MatKhau`) VALUE ('{$username}','{$email}','{$password}')";
$addmember = mysqli_query($conn, $add);

if ($addmember) {
    $_SESSION['username'] = $username;
    echo "<script>window.open('index.php', '_self');</script>";
} else
    echo "Có lỗi xảy ra trong quá trình đăng ký.";
?>