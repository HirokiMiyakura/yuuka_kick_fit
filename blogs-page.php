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
	<h1 data-aos="zoom-out-left" data-aos-delay="500" data-aos-duration="1000" class="main-message main-message-1">新着記事</h1>
	<h1 data-aos="zoom-out-right" data-aos-delay="750" data-aos-duration="1000" class="main-message main-message-2">皆様の役に立つ情報を発信しております</h1>
</section>

<section class="mb-5">
  <!-- <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-8" data-aos="fade-up">
        <h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="section-heading">新着記事一覧</h2>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-delay="750" data-aos-duration="1000" class="col-md-8 mx-auto">
      <ul class="list-group list-group-flush">
        <?php
          $args = array(
            // 'posts_per_page' => 5
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
  </div> -->

  <div class="container">
		<div class="row">
			<h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="section-heading">新着記事一覧</h2>
		</div>
		<div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="row g-4">
			<?php
				$args = array(
					'posts_per_page' => 20
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ):
				setup_postdata( $post );
			?>
			<div class="col-6 col-sm-3">
				<a href="<?php the_permalink(); ?>">
					<p>
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('thumbnail'); ?>
						<?php else : ?>
							<img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
						<?php endif ; ?>
					</p>
					<span><?php the_time('Y年m月d日'); ?></span><br>
					<?php the_title(); ?>
				</a>
			</div>
			<?php
				endforeach;
				wp_reset_postdata();
			?>
		</div>
	</div>
</section>
</main>
<?php get_footer(); ?>