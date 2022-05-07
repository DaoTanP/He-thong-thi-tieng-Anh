<?php
// lấy dữ liệu từ client
if ($_SERVER["REQUEST_METHOD"] != "POST" && !isset($_POST['Username']) && !isset($_POST['Email']) && !isset($_POST['Password']) && !isset($_POST['Repassword']))
    return;

//Nhúng file kết nối với database
$conn = mysqli_connect("localhost", "root", "", "database");
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
$command = "SELECT username FROM member WHERE username = '$username'";
$result = mysqli_query($conn, $command);
if (mysqli_num_rows($result) > 0) {
    echo "Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác hoặc đi tới trang <a href='login.php'>đăng nhập</a>";
    exit;
}

//Kiểm tra email có đúng định dạng hay không
if (!preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/", $email)) {
    echo "Email không hợp lệ. Vui lòng nhập lại";
    //header("Location: signup.html");
    exit;
}
$command1 = "SELECT email FROM member WHERE email='$email'";
$result1 = mysqli_query($conn, $command1);
//Kiểm tra email đã có người dùng chưa
if (mysqli_num_rows($result1) > 0) {
    echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //header("Location: signup.html");
    exit;
}
if ($password != $repassword) {

    echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //header("Location: signup.html");
    exit;
}
//Lưu thông tin thành viên vào bảng
$add = "INSERT INTO member ( username, email, password) VALUE ('{$username}','{$email}','{$password}')";
$addmember = mysqli_query($conn, $add);

//Thông báo quá trình lưu
if ($addmember)
    //header("Location: login.html");
    echo "Quá trình đăng ký thành công. <a href='login.html'>Về trang chủ</a>";
else
    //header("Location: signup.html")
    echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='signup.html'>Thử lại</a>";
