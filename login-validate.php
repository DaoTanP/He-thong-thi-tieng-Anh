<<?php
    // lấy dữ liệu từ client
    var_dump($_POST);
    $username = $_POST['tenDangNhap'];
    $password = $_POST['matKhau'];

    //kết nối với database 
    $conn = mysqli_connect("localhost", "root", "", "hethongthitienganh") or die('khong ket noi duoc.');
    mysqli_query($conn, "SET NAMES 'utf8'");

    $caulenh = "SELECT * FROM `nguoidung` WHERE `TenDangNhap` = '$username' and `MatKhau` = '$password'";
    $ketqua  = mysqli_query($conn, $caulenh);

    if (mysqli_fetch_row($ketqua)) {
        echo 'login successfully <br>';
        if (isset($_POST['nhoMatKhau'])) {
            setcookie('username', $username, time() + 30 /*(86400 * 30)*/, '/');
            setcookie('password', $password, time() + 30 /*(86400 * 30)*/, '/');
        }
        header("Location: index.html");
        // session_start();
        // $_SESSION['user']
        // echo '<a href = "baithi.php"> </a>';
        // unset($_SESSION['user']);
    } else {
        header("Location: login.html");
    }
    ?>