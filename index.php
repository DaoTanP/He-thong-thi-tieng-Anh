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
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<style>
		hr {
			margin: 4rem 0;
		}
	</style>
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

		<hr>

		<div class="flex-container">
			<h1 class="txt-center">Website thi tiếng Anh tiện lợi, nhanh chóng và phù hợp với mọi trình độ!</h1>
			<img class="img-fit-height" style="max-height: 90vh;" src="./assets/img/illustration/developer-team.svg" alt="">
		</div>

		<hr>

		<div class="flex-container">
			<!-- Slider main container -->
			<div class="swiper" style="max-width: 600px; width: 100%; height: 300px;">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/banner3.jpg" alt=""></div>
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/study-unsplash.jpg" alt=""></div>
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/banner2.jpg" alt=""></div>
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/study-unsplash-2.jpg" alt=""></div>
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/banner1.jpg" alt=""></div>
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev" style="background-color: var(--black); color: var(--white); padding: 1rem; box-sizing: content-box;"></div>
				<div class="swiper-button-next" style="background-color: var(--black); color: var(--white); padding: 1rem; box-sizing: content-box;"></div>
				<!-- If we need scrollbar -->
				<!-- <div class="swiper-scrollbar"></div> -->
				<script>
					const swiper = new Swiper('.swiper', {
						// Optional parameters
						direction: 'horizontal',
						loop: true,
						speed: 500,
						centeredSlides: true,
						autoplay: {
							delay: 5000,
						},
						// If we need pagination
						pagination: {
							el: '.swiper-pagination',
							clickable: true,
						},
						// Navigation arrows
						navigation: {
							nextEl: '.swiper-button-next',
							prevEl: '.swiper-button-prev',
						},
						// And if we need scrollbar
						// scrollbar: {
						// 	el: '.swiper-scrollbar',
						// },
					});
				</script>
			</div>
			<h1 class="txt-center" style="width: 75%;">Đề thi đa dạng với lượng câu hỏi phong phú giúp bạn ôn tập những kiến thức đã học một cách hiệu quả</h1>
		</div>

		<hr>

		<div class="flex-container">
			<div>
				<h1 class="txt-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, ullam.</h1>
				<a href="signup.php" class="btn-center btn btn-filled">Đăng kí tài khoản</a>
			</div>
			<img class="img-fit-height" style="max-height: 90vh;" src="./assets/img/illustration/success.svg" alt="">
		</div>
	</div>

	<?php
	require './source/html/footer.html';
	?>
</body>

</html>