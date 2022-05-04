<<?php
    //kết nối với database 
    $conn = mysqli_connect("localhost","root", "", "database");
    mysqli_query($conn, "SET NAMES 'utf8'");

    // lấy dữ liệu từ client
    $username = $_POST['Username'] ;
    $password = $_POST['Password'];
    
    $caulenh = "SELECT * FROM `member` WHERE (username = '$username' and password = '$password')";
    $ketqua  = mysqli_query($conn, $caulenh);

    if($ketqua){
        echo "<a href='login.html'> abc </a>";
        // session_start();
        // $_SESSION['user']
        // echo '<a href = "baithi.php"> </a>';
        // unset($_SESSION['user']);
    }
    else{
        header("Location: login.html");
    }

?>
