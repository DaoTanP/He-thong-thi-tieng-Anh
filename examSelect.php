<?php
// ket noi du lieu
$conn = mysqli_connect("localhost", "root", "", "hethongthitienganh") or die("khong ket noi");
mysqli_query($conn, "set names 'utf8'");

// khoi tao: so cau hoi cho 1 bai thi, so cau hoi trong db, so trang hien thi
$questionPerExam = 40;
$examPerPage = 3;
if (!isset($_GET['page']))
    $_GET['page'] = 0;
$startRow = $_GET['page'] * $questionPerExam;
$command1 = "SELECT * FROM `cauhoi` WHERE 1 LIMIT $questionPerExam OFFSET $startRow";
$command2 = "SELECT * FROM `cauhoi`";
$numberOfRowDB = mysqli_query($conn, $command2)->num_rows;
$numberOfExam = ceil($numberOfRowDB / $questionPerExam);
$numberOfPage = ceil($numberOfExam / $examPerPage);

//chua xong