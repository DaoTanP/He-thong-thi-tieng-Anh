<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí tài khoản</title>
    <link rel="stylesheet" href="./source/css/login-signup.css">
    <link rel="stylesheet" href="./source/css/base.css">
    <link rel="stylesheet" href="./source/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/new-lgoteam.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Roboto:wght@100;300;400;500;700&display=swap');
    </style>
    <script>
        function errorHandling() {
            let messageBox = document.querySelector('.error-message');
            let usernameErrorMessage = "<p>Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác hoặc đi tới trang <a href='login.php'>đăng nhập</a>.</p>";
            let emailErrorMessage = "<p>Email không hợp lệ. Vui lòng nhập lại.</p>";
            let emailExistedErrorMessage = "<p>Email này đã được đăng kí. Vui lòng chọn Email khác hoặc đi tới trang <a href='login.php'>đăng nhập</a>.</p>";
            let passwordErrorMessage = "<p>Mật khẩu không khớp. Vui lòng nhập lại.</p>";

            if (typeof usernameError === 'undefined' &&
                typeof emailError === 'undefined' &&
                typeof existedEmailError === 'undefined' &&
                typeof passwordError === 'undefined') {
                messageBox.style.display = 'none';
            } else {
                if (typeof usernameError !== 'undefined') {
                    messageBox.append(usernameErrorMessage);
                }
                if (typeof emailError !== 'undefined') {
                    messageBox.append(emailErrorMessage);
                }
                if (typeof existedEmailError !== 'undefined') {
                    messageBox.append(emailExistedErrorMessage);
                }
                if (typeof passwordError !== 'undefined') {
                    messageBox.append(emailExistedErrorMessage);
                }
            }
        }
    </script>
</head>

<body onload="errorHandling();">
    <div class=" form-container">
        <div class="form">
            <span class="title">Đăng kí</span>
            <div class="error-message">
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input-field">
                    <input type="text" name="Username" placeholder="Nhập tên đăng nhập" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-field">
                    <input type="email" name="Email" placeholder="Nhập email" required>
                    <i class="fa-solid fa-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="Password" placeholder="Nhập mật khẩu" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="Repassword" placeholder="Nhập lại mật khẩu" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <input class="btn btn-filled" type="submit" value="Đăng kí" required>
            </form>
            <p class="display-block">Đã có tài khoản? <a href="login.php" class="text signup-text">Đăng nhập</a>.</p>
        </div>
    </div>
</body>

</html>
<div style="display: none;">
    <?php
    require 'signup-validate.php';
    ?>
</div>