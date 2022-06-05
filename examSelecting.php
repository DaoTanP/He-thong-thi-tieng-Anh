<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./source/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
</head>

<body>
    <?php
    require './header.php';
    ?>
    <script>
        var pageName = 'Bài thi';
        setNavActive(pageName);
    </script>

    <div class="main container" style="position: relative;">
        <div class="section">
            <h1 class="section-title">Bộ đề thi tiếng Anh</h1>
            <div class="section-container" id="card-container">
                <template>
                    <div class="card">
                        <img src="./assets/img/banner2.jpg" alt="" class="card-media">
                        <div class="card-text">
                            <h1 class="card-title">Trộn đề ngẫu nhiên</h1>
                            <p class="card-description txt-wrapped max-line-2">
                                Đề thi này được trộn ngẫu nhiên trong toàn bộ các câu hỏi của các đề thi khác.
                            </p>
                            <div class="card-subtext">
                                <div class="card-total">Số câu: 40</div>
                                <div class="card-time">Thời gian: 40p</div>
                                <a href="./exam.php" class="btn btn-filled float-right">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <div class="section-title">
                <div class="pagination">
                    <a href="#">&laquo;</a>

                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>
        <div class="section" style="position: sticky; top: 4rem; height: fit-content;">
            <h1 class="section-title txt-center">Loại bài thi</h1>
            <div class="section-container">
                <ul>
                    <li><input type="checkbox" name="a" id=""><label for="a">a</label></li>
                    <li><input type="checkbox" name="b" id=""><label for="b">b</label></li>
                    <li><input type="checkbox" name="c" id=""><label for="c">c</label></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    require './source/html/footer.html';
    ?>
</body>

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

echo '<script> let cards = "";';
while ($item = mysqli_fetch_array($items)) {
    echo 'cards+=`
    <div class="card">
        <img src="./assets/img/banner2.jpg" alt="" class="card-media">
        <div class="card-text">
            <h1 class="card-title">' . $item['TenDeThi'] . '</h1>
            <p class="card-description txt-wrapped max-line-2">
                ' . $item['ChuThich'] . '
            </p>
            <div class="card-subtext">
                <div class="card-total">Số câu: ' . (count(explode(' ', $item['DanhSachCauHoi']))) . '</div>
                <div class="card-time">Thời gian: ' . (floor($item['ThoiGian'] / 60)) . ':' . ($item['ThoiGian'] % 60) . '</div>
                <form action="exam.php" method="post" class="grid-child-right">
                <button type="submit" name="examCode" value="' . $item['MaDeThi'] . '" class="btn btn-filled float-right">Xem chi tiết</button>
                </form>
            </div>
        </div>
    </div>`;';
}

echo 'let pages="";';
if ($_GET['page'] > 0) {
    echo 'pages +=`<a href="examSelecting.php?page=' . ($_GET['page'] - 1) . '">&laquo;</a>`;';
} else {
    echo 'pages +=`<a href="#">&laquo;</a>`;';
}
for ($i = 0; $i < $pages; $i++) {
    if ($_GET['page'] == $i) {
        echo 'pages+=`<a class="active" href="examSelecting.php?page=' . $i . '">' . ($i + 1) . '</a>`;';
    } else {
        echo 'pages+=`<a href="examSelecting.php?page=' . $i . '">' . ($i + 1) . '</a>`;';
    }
}
if ($_GET['page'] < $pages - 1) {
    echo 'pages +=`<a href="examSelecting.php?page=' . ($_GET['page'] + 1) . '">&raquo;</a>`;';
} else {
    echo 'pages +=`<a href="#">&raquo;</a>`;';
}
echo '</script>';
?>
<script>
    if (typeof pages !== 'undefined') {
        document.querySelector('.pagination').innerHTML = pages;
    }
    if (typeof cards !== 'undefined') {
        document.getElementById('card-container').innerHTML = cards;
    }
</script>

</html>