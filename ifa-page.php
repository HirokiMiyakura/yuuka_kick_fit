<?php
/**
 * Template Name: IFAとは
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
              <h1 data-aos="fade-up" data-aos-delay="">IFAとは</h1>
              <p data-aos="fade-up" data-aos-delay="100">普段の我々の仕事内容をご説明いたします</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 me-auto">
          <h2 class="mb-4">IFA（Independent Financial Advisor）</h2>
          <p class="mb-4">IFA（Independent Financial Advisor）とは特定の金融機関に属さない独立したファイナンシャル・アドバイザーのことです。<br>
IFAの多くは金融商品取引業者からの業務委託によって株や債券、投資信託などの売買の仲介を行う“金融商品仲介業者”に所属しています。そのためIFAは、特定の金融機関の営業方針に縛られることなく、投資家のライフプランに合った金融商品や運用のアドバイスをすることが可能です。<br>
欧米では、IFAは大変ポピュラーな存在であり、多くの投資家の方々が金融資産のホームドクターとしてIFAを活用しています。<br>
日本ではまだ認知度が低いものの、長引く低金利・低成長時代を背景に資産運用の機運は高まっており、また、国の金融政策の後押しもあってIFAの数は年々増加しています。<br>
</p>
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
          <h2 class="mb-4">IFAならではの提案</h2>
          <p class="mb-4">特定の金融機関に属さない独立したファイナンシャル・アドバイザーは「金融商品取引業者からの業務委託によって株や債券、投資信託などの売買の仲介を行う“金融商品仲介業者”」に所属しています。<br>
そのためIFAは、特定の金融機関の営業方針やノルマに縛られることなく、投資家のライフプランに合った金融商品や運用のアドバイスをすることが可能です。<br><br>
お客様のニーズに合致するご提案を本気で考えてご提供します。</p>
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
</main>
<?php get_footer(); ?>