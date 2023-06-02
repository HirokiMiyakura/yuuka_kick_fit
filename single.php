<?php
/**
 * Template Name: 新着記事
**/

get_header(); ?>
<main id="main">
  <!-- ======= Features Section ======= -->
  <section class="hero-section inner-page">
    <?php get_template_part('template/wave_others'); ?>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-md-10 text-center hero-text">
              <h1 class="h2" data-aos="fade-up" data-aos-delay=""><?php the_title(); ?></h1>
              <p data-aos="fade-up" data-aos-delay="100"><?php the_time('Y年m月d日'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Blog Section ======= -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <!-- ======= End Blog Section ======= -->

</main><!-- End #main -->
<?php get_footer(); ?>