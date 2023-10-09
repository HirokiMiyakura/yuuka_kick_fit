<?php
/**
 * Template Name: お問い合わせ
**/

get_header(); ?>
<main>
<section class="section mb-5">
	<div class="outside-left">
		<p><img class="img-fluid rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_main.jpeg" alt=""></p>
	</div>
	<h1 data-aos="zoom-out-left" data-aos-delay="500" data-aos-duration="1000" class="main-message main-message-1">お問い合わせ</h1>
	<!-- <h1 class="main-message main-message-2">皆様の役に立つ情報を発信しております</h1> -->
</section>

<section class="mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto mb-4" data-aos="fade-up">
        <h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="section-heading">お問い合わせフォーム</h2>
      </div>
    </div>
    <div class="col-md-8 mx-auto">
      <?php echo do_shortcode('[contact-form-7 id="22" title="コンタクトフォーム"]'); ?>
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>