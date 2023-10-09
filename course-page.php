<?php
/**
 * Template Name: コース紹介（course-page.php）
**/

get_header(); ?>
<main>
<section class="section mb-5">
	<div class="outside-left">
		<p><img class="img-fluid rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_main.jpeg" alt=""></p>
	</div>
	<h1 data-aos="zoom-out-left" data-aos-delay="500" data-aos-duration="1000" class="main-message main-message-1">コース紹介</h1>
	<h1 data-aos="zoom-out-right" data-aos-delay="750" data-aos-duration="1000" class="main-message main-message-2">女性専用パーソナルトレーニング実施中</h1>
</section>

<section class="mb-5 bg">
	<div class="container">
		<div class="row">
			<h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="section-heading">プラン</h2>
		</div>
		<div class="row">
			<div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="col-12 col-sm-4 mb-5">
				<div class="card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_1.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title fw-semibold mb-3">週3通い放題</h5>
            <dl class="lh-lg">
              <dt>月会費</dt>
              <dd>¥8,000（税別）</dd>
              <dt>入会金</dt>
              <dd>¥10,000（税別）</dd>
              <dt>利用可能日</dt>
              <dd>火曜日、水曜日は11時~20時<br>土曜日は11時~18時</dd>
            </dl>
					</div>
				</div>
			</div>
			<div data-aos="fade-up" data-aos-delay="750" data-aos-duration="1000" class="col-12 col-sm-4 mb-5">
				<div class="card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_4.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title fw-semibold mb-3">小学生コース</h5>
						<dl class="lh-lg">
              <dt>月会費</dt>
              <dd>¥5,000（税別）</dd>
              <dt>入会金</dt>
              <dd>¥10,000（税別）</dd>
              <dt>利用可能日</dt>
              <dd>火曜日、水曜日は11時~20時<br>土曜日は11時~18時</dd>
            </dl>
            <p class="h6">※ 入会金は一家族一回だけしかかかりません。</p>
					</div>
				</div>
			</div>
			<div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000" class="col-12 col-sm-4 mb-5">
				<div class="card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/trainer1.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title fw-semibold mb-3">パーソナルトレーニング</h5>
						<dl class="lh-lg">
              <dt>費用</dt>
              <dd>¥5,000（税別）</dd>
            </dl>
            <p class="h6">※ パーソナルトレーニングは女性専用です。</p>
            <p class="h6">※ チケット割引もございます。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</main>
<?php get_footer(); ?>