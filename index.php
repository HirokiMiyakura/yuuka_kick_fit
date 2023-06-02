<?php get_header(); ?>
<section class="hero-section" id="hero">
	<?php get_template_part('template/wave_index'); ?>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 hero-text-image">
				<div class="row">
					<div class="col-lg-8 text-center text-lg-start">
						<h1 class="main-message" data-aos="fade-right">お客様にとって<br>唯一無二の存在になりたい</h1>
						<p class="mb-5" data-aos="fade-right" data-aos-delay="100">
						独立系ファイナンシャルアドバイザー（IFA）に一度ご相談下さい。<br>オーダーメイドの価値ある提案で、問題解決を目指します。
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<main id="main">
<!-- <section class="section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-8" data-aos="fade-up">
					<h2 class="section-heading">無料金融知識向上セミナー開催</h2>
				</div>
			</div>
			<div class="col-md-8 mx-auto">
				<p>「金融商品やサービスだけでなく相続対策に至るまで様々な問題解決のヒントをお伝えしたい」との思いから、皆様が気軽に相談したり、情報共有ができる場として積極的にセミナーを開催しております。<br>
参加無料ですので、是非ご参加ください。</p>
			</div>
		</div>
	</section> -->
	<section class="section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 me-auto">
					<h2 class="mb-4">ご挨拶</h2>
					<p class="mb-4">当ホームページをご覧いただきありがとうございます。<br>このホームページでは、IFA（Independent Financial Advisor）という仕事についてや、お金にまつわる様々な情報を発信していきたいと考えております。<br>あなたの財務計画をサポートし、最高のサービスを提供することが我々の使命です。<br>お悩みやご質問があれば、いつでもお気軽にご相談ください。<br>心からのご挨拶を申し上げます。</p>
					<p><a href="<?php echo home_url(); ?>/contact" class="btn btn-primary w-100">無料相談はこちらから</a></p>
				</div>
				<div class="col-md-5" data-aos="fade-left">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/img/woman.jpg"
						alt="Image"
						class="img-fluid rounded-3"
					/>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 order-md-2">
					<h2 class="mb-4">無料金融知識向上セミナー開催</h2>
					<p class="mb-4">「金融商品やサービスだけでなく相続対策に至るまで様々な問題解決のヒントをお伝えしたい」との思いから、皆様が気軽に相談したり、情報共有ができる場として積極的にセミナーを開催しております。<br>
参加無料ですので、是非ご参加ください。</p>
					<p><a href="<?php echo home_url(); ?>/contact" class="btn btn-primary w-100">無料セミナーはこちらから</a></p>
				</div>
				<div class="col-md-5 me-auto" data-aos="fade-right">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/img/interview.jpg"
						alt="Image"
						class="img-fluid rounded-3"
					/>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-5" data-aos="fade-up">
					<h2 class="section-heading">サービス</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="step">
						<span class="number">01</span>
						<h3>ポートフォリオ運用</h3>
						<p>マーケット環境、分散効果投資効率、リスク許容度を共有し問題解決に向けた提案をいたします。</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="step">
						<span class="number">02</span>
						<h3>投資信託積立</h3>
						<p>ドルコスト平均法によるリスクを抑えた効率的な運用をご案内します。</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="step">
						<span class="number">03</span>
						<h3>相続対策</h3>
						<p>大切な家族に資産を残すための提案をご用意しております。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-md-5" data-aos="fade-up">
					<h2 class="section-heading">新着記事</h2>
				</div>
			</div>
			<div class="col-md-8 mx-auto">
				<ul class="list-group list-group-flush">
					<?php
						$args = array(
							'posts_per_page' => 5
						);
						$posts = get_posts( $args );
						foreach ( $posts as $post ):
						setup_postdata( $post );
					?>
					<li class="h5 mb-4 pb-4 list-group-item">
						<a href="<?php the_permalink(); ?>"><span><?php the_time('Y年m月d日'); ?></span>　<?php the_title(); ?></a>
					</li>
					<?php
						endforeach;
						wp_reset_postdata();
					?>
				</ul>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
