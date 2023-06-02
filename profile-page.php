<?php
/**
 * Template Name: プロフィール
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
              <h1 data-aos="fade-up" data-aos-delay="">プロフィール</h1>
              <p data-aos="fade-up" data-aos-delay="100">資産運用アドバイザー IFA 鈴木義典</p>
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
          <h2 class="mb-4">プロフィール</h2>
          <p class="mb-4">2003年 明治大学政治経済学部卒業後、日興コーディアル証券株式会社（現SMBC日興証券株式会社）に入社。入社後、烏山支店、本店、小金井支店、所沢支店にて、コンサルタント営業として9年半、証券営業に従事。<br>
          2012年、株式会社アイ・パートナーズフィナンシャル所属のIFAとして独立。IFA歴10年。趣味はゴルフ。保有資格は、AFP（日本FP協会認定）、行政書士（2022年度試験に合格）。家族は妻、13歳の息子、9歳の娘の4人家族。</p>
        </div>
        <div class="col-md-5" data-aos="fade-left">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg"
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
          <h2 class="mb-4">メッセージ</h2>
          <p class="mb-4">私は、証券会社の総合職を9年半勤めた後、アイ・パートナーズフィナンシャルに所属し、IFAとして独立し、活動しています。<br>
IFAを目指した「きっかけ」であり、今でも行動の指針となっている大切なものがあります。<br>
証券会社に入社した時に遡ります。支店長から最初に言われた言葉が、私の社会人人生にとてつもなく大きな影響を与えました。<br>
「お客様のための商いなのか、自分のための商いなのか、胸に手を当てて考えて仕事をしろ」という言葉です。<br>
この言葉が私の芯となり、お客様のために最善を尽くすことが私の仕事だという想いを強く持つようになりました。そのためには転勤なく、一生涯、お客様とお付き合いできる環境で仕事をしたいと考え、IFAになることを選択しました。IFAとして独立して10年が経ちましたが、毎日が充実しています。独立して以来、仕事が嫌だと思ったことは一度もなく、「お客様のための仕事をする」という自身の想いを達成できていると感じています。またよりお客様の役に立つべく2022年行政書士試験に合格し、2023年登録予定です。この仕事を一生続け、お客様から「鈴木さんの代わりはいない」と感じてもらえる唯一無二の存在になりたいと思っています。
</p>
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