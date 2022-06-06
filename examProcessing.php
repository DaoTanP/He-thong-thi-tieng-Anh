<?php
// ket noi du lieu
$conn = mysqli_connect("localhost", "root", "", "hethongthitienganh") or die("khong ket noi");
mysqli_query($conn, "set names 'utf8'");

// phan trang
$maxItemsOnPage = 3;
if (!isset($_GET['page']))
    $_GET['page'] = 0;
$startingItem = $_GET['page'] * $maxItemsOnPage;

$total = mysqli_query($conn, "SELECT * FROM `dethi`")->num_rows;
$items = mysqli_query($conn, "SELECT * FROM `dethi` WHERE 1 LIMIT $maxItemsOnPage OFFSET $startingItem");

$pages = ceil($total / $maxItemsOnPage);

for ($i = 0; $i < $pages; $i++) {
    echo '<a href="Interface.php?page=' . ($i + 1) . '">' . ($i + 1) . '</a> | ';
}
