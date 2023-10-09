<?php
/**
 * Template Name: 施設案内（about-page.php）
**/

get_header(); ?>
<main>
<section class="section mb-5">
	<div class="outside-left">
		<p><img class="img-fluid rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_main.jpeg" alt=""></p>
	</div>
	<h1 data-aos="zoom-out-left" data-aos-delay="500" data-aos-duration="1000" class="main-message main-message-1">施設案内</h1>
	<!-- <h1 data-aos="zoom-out-right" data-aos-delay="750" data-aos-duration="1000" class="main-message main-message-2">女性専用パーソナルトレーニング実施中</h1> -->
</section>

<section class="mb-5 bg">
	<div class="container">
		<div class="row">
			<h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="section-heading">設備紹介</h2>
		</div>
		<div class="row">
			<div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="col-12 col-sm-4 mb-5">
				<div class="card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about1.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title fw-semibold mb-3">サンドバッグ</h5>
            <p>サンドバッグ練習でストレス発散！<br>ミット打ちも可能です！</p>
					</div>
				</div>
			</div>
			<div data-aos="fade-up" data-aos-delay="750" data-aos-duration="1000" class="col-12 col-sm-4 mb-5">
				<div class="card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about2.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title fw-semibold mb-3">トレーニングマシン</h5>
						<p>器具を使ってトレーニング！<br>利用方法はお気軽にお尋ねください！</p>
					</div>
				</div>
			</div>
			<div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000" class="col-12 col-sm-4 mb-5">
				<div class="card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about3.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title fw-semibold mb-3">清掃用具</h5>
						<p>ジムの中はいつもピカピカ！<br>女性やお子様にも安心安全な環境です！</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</main>
<?php get_footer(); ?>