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
    <style>
        label {
            display: block;
            text-align: left;
        }

        input[type='checkbox'],
        input[type='radio'] {
            margin-right: .5rem;
            transform: scale(1.25);
            accent-color: var(--primary-dark);
        }
    </style>
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
            <h1 class="section-title txt-center">Lọc và sắp xếp</h1>
            <div class="section-container">
                <div class="category">
                    <h3 style="margin: 0;">Hiển thị</h3>
                    <Label for="tuVung"><input type="checkbox" checked name="" id="tuVung">Từ vựng</Label>
                    <Label for="maoTu"><input type="checkbox" checked name="" id="maoTu">Mạo từ</Label>
                    <Label for="trongAm"><input type="checkbox" checked name="" id="trongAm">Trọng âm</Label>
                    <Label for="thptqg"><input type="checkbox" checked name="" id="thptqg">Đề thi THPTQG</Label>
                </div>
                <hr style="width: 100%;">
                <div class="category">
                    <h3 style="margin: 0;">Sắp xếp</h3>
                    <Label for="soCau1"><input type="radio" name="sort" id="soCau1">Số câu: thấp đến cao</Label>
                    <Label for="soCau2"><input type="radio" name="sort" id="soCau2">Số câu: cao đến thấp</Label>
                    <Label for="tg1"><input type="radio" name="sort" id="tg1">Thời gian: ngắn đến dài</Label>
                    <Label for="tg2"><input type="radio" name="sort" id="tg2">Thời gian: dài đến ngắn</Label>
                </div>
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
$maxItemsOnPage = 5;
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
                <div class="card-time">Thời gian: ' . str_pad((floor($item['ThoiGian'] / 60)), 2, '0', STR_PAD_LEFT) . ':' . str_pad(($item['ThoiGian'] % 60), 2, '0', STR_PAD_LEFT) . '</div>
                <form action="exam.php" method="post" class="grid-child-right">
                <button type="submit" name="examCode" value="' . $item['MaDeThi'] . '" class="btn btn-filled float-right">Xem chi tiết</button>
                </form>
            </div>
        </div>
    </div>`;';
}

echo 'let pages="";';
if ($_GET['page'] > 0) {
    echo 'pages +=`<a href="examSelecting.php?page=' . ($_GET['page'] - 1) . '">&larr;</a>`;';
} else {
    echo 'pages +=`<a href="#">&larr;</a>`;';
}

//show all pages
for ($i = 0; $i < $pages; $i++) {
    if ($_GET['page'] == $i) {
        echo 'pages+=`<a class="active" href="examSelecting.php?page=' . $i . '">' . ($i + 1) . '</a>`;';
    } else {
        echo 'pages+=`<a href="examSelecting.php?page=' . $i . '">' . ($i + 1) . '</a>`;';
    }
}

if ($_GET['page'] < $pages - 1) {
    echo 'pages +=`<a href="examSelecting.php?page=' . ($_GET['page'] + 1) . '">&rarr;</a>`;';
} else {
    echo 'pages +=`<a href="#">&rarr;</a>`;';
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