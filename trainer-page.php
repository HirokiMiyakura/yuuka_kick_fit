<?php
/**
 * Template Name: トレーナー紹介（trainer-page.php）
**/

get_header(); ?>
<main>
<section class="section mb-5">
	<div class="outside-left">
		<p><img class="img-fluid rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_main.jpeg" alt=""></p>
	</div>
	<h1 data-aos="zoom-out-left" data-aos-delay="500" data-aos-duration="1000" class="main-message main-message-1">トレーナー紹介</h1>
	<!-- <h1 class="main-message main-message-2">女性専用パーソナルトレーニング実施中</h1> -->
</section>

<section class="mb-5 bg">
	<div class="container">
		<div class="row">
			<h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="section-heading">トレーナー紹介</h2>
		</div>
		<div class="row">
			<div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="col-12 col-sm-6 mb-5">
				<div class="card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/trainer1.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title mb-3">YUUKA</h3>
						<p class="card-text lh-lg">元気が取り柄のYUUKAです⭐️<br>
女性専用のパーソナルトレーナーから始まり、キックボクシングのトレーナーとして働いた後、2023.4月にYUUKA KICK FITジムをオープンしました。<br>
身体の事について話し出したら止まりません！笑<br>
食べるのが大好きなので美味しいご飯を沢山食べるために、とにかく動く！！<br>
キックボクシングが大好きすぎて、その楽しさが1人でも多くの方に伝わればいいなと思います。<br>
また武道の経験を活かし礼儀節度や道徳などの指導も行っています。キックボクシング以外にも様々な事を学び、有意義な時間をみんなでつくっていけたらと思います。</p>
            <h4 class="h4">保有資格</h4>
            <ul class="p-0 lh-lg">
              <li>ダイエットインストラクター</li>
              <li>腸栄養学トレーナー</li>
              <li>DNA栄養学トレーナー</li>
              <li>パーソナルトレーナー育成協会JAM認定講師</li>
              <li>格闘技エクササイズkickoutインストラクター</li>
            </ul>
					</div>
				</div>
			</div>
			<div data-aos="fade-up" data-aos-delay="750" data-aos-duration="1000" class="col-12 col-sm-6 mb-5">
				<div class="card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/trainer2.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h3 class="card-title mb-3">たくみ</h3>
						<p class="card-text lh-lg"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</main>
<?php get_footer(); ?>