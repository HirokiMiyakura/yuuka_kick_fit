<?php
/**
 * Template Name: 新着記事
**/

get_header(); ?>
<main id="main">
  <section class="hero-section inner-page">
    <?php get_template_part('template/wave_others'); ?>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-md-7 text-center hero-text">
              <h1 data-aos="fade-up" data-aos-delay="">新着記事</h1>
              <p data-aos="fade-up" data-aos-delay="100">皆様の役に立つ情報を発信しております</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8" data-aos="fade-up">
          <h2 class="section-heading">一覧</h2>
        </div>
      </div>
      <div class="col-md-8 mx-auto">
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
    </div>
  </section>
</main>
<?php get_footer(); ?>