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
    <script>
        window.onload = function() {
            let urlParams = new URLSearchParams(location.search);

            let page = urlParams.get('page');
            if (page != null)
                document.forms['controlPanel']['page'].value = page;
        }
    </script>
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
            <form id="controlPanel" method="get" class="section-container">
                <input type="text" name="page" value="" class="hidden">
                <div class="category">
                    <h3 style="margin: 0;">Hiển thị</h3>
                    <Label for="tuDongNghia"><input type="checkbox" name="display[]" value="Từ đồng nghĩa" id="tuDongNghia">Từ đồng nghĩa</Label>
                    <Label for="tuTraiNghia"><input type="checkbox" name="display[]" value="Từ trái nghĩa" id="tuTraiNghia">Từ trái nghĩa</Label>
                    <Label for="maoTu"><input type="checkbox" name="display[]" value="Mạo từ" id="maoTu">Mạo từ</Label>
                    <Label for="gioiTu"><input type="checkbox" name="display[]" value="Giới từ" id="gioiTu">Giới từ</Label>
                    <Label for="docHieu"><input type="checkbox" name="display[]" value="Đọc hiểu đoạn văn" id="docHieu">Đọc hiểu đoạn văn</Label>
                    <Label for="thptqg"><input type="checkbox" name="display[]" value="THPTQG" id="thptqg">Đề thi THPTQG</Label>
                </div>
                <hr style="width: 100%;">
                <div class="category">
                    <h3 style="margin: 0;">Sắp xếp</h3>
                    <Label for="soCau1"><input type="radio" name="sort" value="scAsc" id="soCau1">Số câu: thấp đến cao</Label>
                    <Label for="soCau2"><input type="radio" name="sort" value="scDesc" id="soCau2">Số câu: cao đến thấp</Label>
                    <Label for="tg1"><input type="radio" name="sort" value="tgAsc" id="tg1">Thời gian: ngắn đến dài</Label>
                    <Label for="tg2"><input type="radio" name="sort" value="tgDesc" id="tg2">Thời gian: dài đến ngắn</Label>
                </div>
                <hr style="width: 100%;">
                <input type="submit" value="Thực hiện" class="btn btn-filled">
            </form>
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

$searchquery = '';
if (isset($_GET['display'])) {
    $searchquery .= "WHERE `LoaiDeThi` IN (";
    for ($i = 0; $i < count($_GET['display']) - 1; $i++) {
        $searchquery .= "'" . $_GET['display'][$i] . "', ";
    }
    $searchquery .= "'" . $_GET['display'][count($_GET['display']) - 1] . "') ";
}

if (isset($_GET['sort'])) {
    switch ($_GET['sort']) {
        case "scAsc":
            $searchquery .= 'ORDER BY `SoCauHoi` ASC';
            break;
        case "scDesc":
            $searchquery .= 'ORDER BY `SoCauHoi` DESC';
            break;
        case "tgAsc":
            $searchquery .= 'ORDER BY `ThoiGian` ASC';
            break;
        case "tgDesc":
            $searchquery .= 'ORDER BY `ThoiGian` DESC';
            break;
        default:
            break;
    }
}
$items = mysqli_query($conn, "SELECT * FROM `dethi` " . $searchquery . " LIMIT $maxItemsOnPage OFFSET $startingItem");
$total = mysqli_query($conn, "SELECT * FROM `dethi` " . $searchquery)->num_rows;
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

function getUrlWithout($getNames)
{
    $url = $_SERVER['REQUEST_URI'];
    $questionMarkExp = explode("?", $url);
    if (!isset($questionMarkExp[1]))
        return $questionMarkExp[0] . "?";
    $urlArray = explode("&", $questionMarkExp[1]);
    $retUrl = $questionMarkExp[0];
    $retGet = "";
    $found = array();
    foreach ($getNames as $id => $name) {
        foreach ($urlArray as $key => $value) {
            if (isset($_GET[$name]) && $value == $name . "=" . $_GET[$name])
                unset($urlArray[$key]);
        }
    }
    $urlArray = array_values($urlArray);
    foreach ($urlArray as $key => $value) {
        if ($key < sizeof($urlArray) && $retGet !== "")
            $retGet .= "&";
        $retGet .= $value;
    }
    return $retUrl . "?" . $retGet;
}

$url = getUrlWithout(array('page'));
echo 'let pages="";';
if ($_GET['page'] > 0) {
    echo 'pages +=`<a href="' . $url . '&page=' . ($_GET['page'] - 1) . '">&larr;</a>`;';
} else {
    echo 'pages +=`<a href="' . $url . '&page=0">&larr;</a>`;';
}

//show all pages
for ($i = 0; $i < $pages; $i++) {
    if ($_GET['page'] == $i) {
        echo 'pages+=`<a class="active" href="' . $url . '&page=' . $i . '">' . ($i + 1) . '</a>`;';
    } else {
        echo 'pages+=`<a href="' . $url . '&page=' . $i . '">' . ($i + 1) . '</a>`;';
    }
}

if ($_GET['page'] < $pages - 1) {
    echo 'pages +=`<a href="' . $url . '&page=' . ($_GET['page'] + 1) . '">&rarr;</a>`;';
} else {
    echo 'pages +=`<a href="' . $url . '&page=' . $_GET['page'] . '">&rarr;</a>`;';
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