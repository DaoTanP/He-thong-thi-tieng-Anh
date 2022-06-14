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
		.section-item {
			margin: 1rem 0;
		}

		hr {
			margin: 4rem 0;
		}

		input:not([type="submit"]),
		textarea {
			background-color: transparent;
			padding: .5rem 0;
			width: 100%;
			border: none;
			border-bottom: 2px solid var(--primary);
			outline: none;
		}

		textarea {
			padding: .5rem .5rem;
			border: 2px solid var(--primary);
		}

		input:not([type="submit"]):focus {
			border-bottom: 2px solid var(--secondary);
		}

		textarea:focus {
			border: 2px solid var(--secondary);
		}

		[type="submit"] {
			margin: 1rem 5px;
			font-size: 1.5rem;
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
		<hr>
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
			<img class="img-fit-height" style="max-height: 70vh;" src="./assets/img/illustration/developer-team.svg" alt="">
		</div>

		<hr>

		<div class="flex-container">
			<!-- Slider main container -->
			<div class="swiper" style="max-width: 600px; width: 100%; height: 350px;">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper" style="height: 300px;">
					<!-- Slides -->
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/banner3.jpg" alt=""></div>
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/study-unsplash.jpg" alt=""></div>
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/banner2.jpg" alt=""></div>
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/study-unsplash-2.jpg" alt=""></div>
					<div class="swiper-slide"><img style="width: inherit; height: inherit; object-fit: cover;" src="./assets/img/banner1.jpg" alt=""></div>
				</div>
				<div class="swiper-pagination"></div>
				<!-- <div class="swiper-button-prev" style="background-color: var(--black); color: var(--white); padding: 1rem; box-sizing: content-box; transform: translateY(-35px);"></div> -->
				<!-- <div class="swiper-button-next" style="background-color: var(--black); color: var(--white); padding: 1rem; box-sizing: content-box; transform: translateY(-35px);"></div> -->
				<!-- If we need scrollbar -->
				<!-- <div class="swiper-scrollbar"></div> -->
				<script>
					const swiper = new Swiper('.swiper', {
						// Optional parameters
						direction: 'horizontal',
						loop: true,
						speed: 500,
						centeredSlides: true,
						grabCursor: true,
						autoplay: {
							delay: 3000,
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

		<div class="section">
			<h1 class="section-title txt-center">Liên hệ với chúng tôi</h1>
			<div class="flex-container" style="gap: 2rem; background-color: var(--white); padding: .5rem;">
				<form action="#" method="post" style="width: 100%;">
					<p style="margin-bottom: 0;">Họ và tên:</p>
					<input type="text">
					<p style="margin-bottom: 0;">Số điện thoại:</p>
					<input type="number">
					<p style="margin-bottom: 0;">Email:</p>
					<input type="email">
					<p style="margin-bottom: 0;">Tin nhắn:</p>
					<textarea name="" id="" cols="30" rows="5"></textarea>
					<input type="submit" value="Gửi tin nhắn" class="btn btn-filled display-block">
				</form>
				<img class="img-fit-height" style="max-height: 70vh;" src="./assets/img/illustration/virtual-assistant.svg" alt="">
			</div>
		</div>
	</div>
	</div>

	<?php
	require './source/html/footer.html';
	?>
</body>

</html>