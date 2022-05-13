<div class="grid-container header" id="header">
    <a href="#" class="grid-child-left">
        <img class="logo-header" src="?" alt="logo-team4">
    </a>
    <nav class="navbar full-height grid-child-stretch">
        <ul class="navbar-list grid-container full-height">
            <li>
                <a href="./index.php"><i class="icon fa-solid fa-house"></i>Trang chủ</a>
            </li>
            <li>
                <a href="./examSelecting.php"><i class="icon fa-solid fa-file"></i>Bài thi</a>
            </li>
            <li>
                <a href=""><i class="icon fa-solid fa-book"></i>Tài liệu</a>
            </li>
            <li>
                <a href=""><i class="icon fa-solid fa-circle-question"></i>Trợ giúp</a>
            </li>
            <li>
                <a href=""><i class="icon fa-solid fa-person-circle-question"></i>Hỏi đáp</a>
            </li>
        </ul>
    </nav>
    <div id="login-signup-btn" class="flex-container full-height grid-child-right">
        <a href="signup.php" class="btn">Đăng kí</a>
        <a href="login.php" class="btn btn-filled">Đăng nhập</a>
    </div>
    <div id="user-account" class="flex-container full-height grid-child-right hidden">
        <a href="logout.php">Tên người dùng</a>
    </div>
</div>
<script>
    function setNavActive(pageName) {
        let element = header.querySelectorAll('.navbar-list a');
        var activePage;
        for (let index = 0; index < element.length; index++) {
            if (element[index].textContent == pageName) {
                activePage = element[index];
                break;
            }
        }

        if (typeof activePage !== 'undefined') {
            activePage.classList.toggle('disabled');
        }
    }

    function setUserAccount(username) {
        let btnGroup = document.getElementById('login-signup-btn');
        let userAccount = document.getElementById('user-account');
        if (typeof username !== 'undefined' && username !== null) {
            btnGroup.classList.add('hidden');
            userAccount.classList.remove('hidden');
            userAccount.querySelector('a').textContent = username + " | Đăng xuất";
        } else {
            btnGroup.classList.remove('hidden');
            userAccount.classList.add('hidden');
        }
    }
</script>
<?php
if (isset($_SESSION['username'])) {
    echo 'var username = ' . $_SESSION['username'] . ';
        setUserAccount(username);';
}
?>