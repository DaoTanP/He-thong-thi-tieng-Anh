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
	<div class="hero-section background-primary">
		<?php
		require './header.php';
		?>
		<script>
			var pageName = 'Trang chủ';
			setNavActive(pageName);
		</script>
		<div class="banner">
			<img class="svg" src="./assets/img/earth.svg">
			<div class="hero-text">
				<h1>Website thi tiếng Anh miễn phí, hiệu quả!</h1>
				<p>Nơi thử sức khả năng tiếng Anh của bạn</p>
				<a href="examSelecting.php" class="btn btn-filled txt-upper">Bắt đầu</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="section">
			<h2 class="section-title txt-center">Tại sao chọn chúng tôi?</h2>
			<div class="flex-container" style="align-items: stretch;">
				<div class="section-item full-width">
					<img class="svg-1" src="./assets/img/analytics-chart-growth-svgrepo-com.svg" alt="">
					<h3 class="name">Tính hiệu quả</h3>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque, culpa!</p>
				</div>
				<div class="section-item full-width">
					<img class="svg-1" src="./assets/img/background-svgrepo-com.svg" alt="">
					<h3 class="name">Giao diện thân thiện</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati natus deleniti a aliquam
						laboriosam unde?</p>
				</div>
				<div class="section-item full-width">
					<img class="svg-1" src="./assets/img/news-paper-svgrepo-com.svg" alt="">
					<h3 class="name">Đề thi đa dạng</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita tempore tempora adipisci.</p>
				</div>
			</div>
		</div>
		<hr style="margin: 4rem 0;">

	</div>

	<?php
	require './source/html/footer.html';
	?>
</body>

</html>