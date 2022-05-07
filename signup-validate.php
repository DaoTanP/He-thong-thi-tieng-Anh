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

if ($addmember)
    header("Location: index.php");
else
    echo "Có lỗi xảy ra trong quá trình đăng ký.";
