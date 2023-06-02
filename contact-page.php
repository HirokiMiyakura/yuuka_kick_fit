<?php
/**
 * Template Name: お問い合わせ
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
              <h1 data-aos="fade-up" data-aos-delay="">お問い合わせ</h1>
              <p data-aos="fade-up" data-aos-delay="100">お気軽にご相談ください</p>
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
          <h2 class="section-heading mb-4">お問い合わせフォーム</h2>
        </div>
      </div>
      <div class="col-md-10 mx-auto">
        <?php echo do_shortcode('[contact-form-7 id="22" title="コンタクトフォーム"]'); ?>
        <p>※ ご記入頂きました個人情報は個別面談の日時等に関するご連絡およびセミナーのご案内以外には使用いたしません。</p>
      </div>
      <!-- <p>ご記入頂きました個人情報は個別面談の日時等に関するご連絡およびセミナーのご案内以外には使用いたしません。</p> -->
    </div>
  </section>
</main>
<?php get_footer(); ?>