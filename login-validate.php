<<?php
    session_start();
    // lấy dữ liệu từ client
    if ($_SERVER["REQUEST_METHOD"] != "POST" && !isset($_POST['tenDangNhap']) && !isset($_POST['matKhau']))
        return;

    $username = $_POST['tenDangNhap'];
    $password = $_POST['matKhau'];

    $password = md5($password);

    //kết nối với database 
    $conn = mysqli_connect("localhost", "root", "", "hethongthitienganh") or die('khong ket noi duoc.');
    mysqli_query($conn, "SET NAMES 'utf8'");

    $caulenh = "SELECT * FROM `nguoidung` WHERE `TenDangNhap` = '$username' and `MatKhau` = '$password'";
    $ketqua  = mysqli_query($conn, $caulenh);

    if (mysqli_fetch_row($ketqua)) {
        if (isset($_POST['nhoMatKhau'])) {
            setcookie('username', $username, time() + 30 /*(86400 * 30)*/, '/');
            setcookie('password', $password, time() + 30 /*(86400 * 30)*/, '/');
        }
        $_SESSION['username'] = $username;
        header("Location: index.php");
<<<<<<< HEAD
        session_start();
        //$_SESSION['user'];
        // echo '<a href = "baithi.php"> </a>';
        // unset($_SESSION['user']);
=======
>>>>>>> b70dfbf1c715009a9ffde570dc24104d24744316
    } else {
        //cach 1: tao cookie cho loi
        //header("Location: login.html");
        //setcookie('loginError', 'true', time() + 5 /*(86400 * 30)*/, '/');

        //cach 2: echo 1 bien js roi doc bien do tren cung 1 trang
        echo '<script>var error = true</script>';
    }
    ?>