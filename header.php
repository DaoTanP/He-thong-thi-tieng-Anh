<?php
if (session_id() == '') {
    session_start();
}
?>
<div class="grid-container header" id="header">
    <a href="index.php" class="grid-child-left">
        <img class="logo-header" src="./assets/img/abc-alphabet-basic-svgrepo-com.svg" alt="logo" style="width: 48px; height: 48px;">
    </a>
    <nav class="full-height">
        <ul class="navbar-list grid-container full-height">
            <li>
                <a href="./index.php"><i class="icon fa-solid fa-house"></i>Trang chủ</a>
            </li>
            <li>
                <a href="./examSelecting.php"><i class="icon fa-solid fa-file"></i>Bài thi</a>
            </li>
            <li>
                <a href="./document.php"><i class="icon fa-solid fa-book"></i>Tài liệu</a>
            </li>
            <li>
                <a href="./help.php"><i class="icon fa-solid fa-circle-question"></i>Trợ giúp</a>
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
        <div class="avatar dropdown" data-label="A" onclick="this.classList.toggle('opened')"></div>
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
        let avatar = userAccount.querySelector('.avatar');
        if (typeof username !== 'undefined' && username !== null) {
            // btnGroup.style.display = 'none';
            // userAccount.style.display = 'block';
            btnGroup.classList.add("hidden");
            userAccount.classList.remove("hidden");
            let nameSplit = username.split(' ');
            let firstCharOfNames = '';
            nameSplit.forEach(word => {
                firstCharOfNames += word.charAt(0);
            });
            avatar.dataset.label = firstCharOfNames.substring(0, 2).toUpperCase();
            avatar.innerHTML = `
                <div class="dropdown-content" style='user-select: none;'>
                    <div class="avatar" data-label="${avatar.dataset.label}" style="margin: auto; font-size: 2rem;"></div>
                    <h4 class="txt-center">${username}</h4>
                    <hr>
                    <a href="logout.php" class="btn btn-center btn-filled" style="display:block; width:80%; text-align: center;">Đăng xuất</a>
                </div>
            `;
        } else {
            // btnGroup.style.display = 'block';
            // userAccount.style.display = 'none';
            btnGroup.classList.remove("hidden");
            userAccount.classList.add("hidden");
        }
    }

    function initAvatar() {
        const avatars = document.querySelectorAll(".avatar");

        avatars.forEach((a) => {
            const charCodeRed = a.dataset.label.charCodeAt(0);
            const charCodeGreen = a.dataset.label.charCodeAt(1) || charCodeRed;

            const red = Math.pow(charCodeRed, 7) % 200;
            const green = Math.pow(charCodeGreen, 7) % 200;
            const blue = (red + green) % 200;
            a.style.background = `rgb(${red}, ${green}, ${blue})`;
        });
    }
    <?php
    if (!empty($_SESSION['username'])) {
        echo 'var username = "' . $_SESSION['username'] . '";
        setUserAccount(username); initAvatar();';
    } else {
        echo 'var username = null';
    }
    ?>
</script>