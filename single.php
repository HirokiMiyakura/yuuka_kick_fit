<?php
/**
 * Template Name: 新着記事
**/

get_header(); ?>
<main>
<section class="section mb-5">
	<div class="outside-left">
		<p><img class="img-fluid rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_main.jpeg" alt=""></p>
	</div>
	<!-- <h1 class="main-message main-message-1"><?php the_title(); ?></h1> -->
	<!-- <h1 class="main-message main-message-2">皆様の役に立つ情報を発信しております</h1> -->
</section>

<section class="mb-5">
  <div class="container ps-sm-5 pe-sm-5">
    <div class="row">
      <h2 class="mb-4"><?php the_title(); ?></h2>
      <p class="mb-4"><?php the_time('Y年m月d日'); ?></p>
      <?php the_content(); ?>
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>