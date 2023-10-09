<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo(); ?></title>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/ress.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/scss/main.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
  <div class="container p-4">
    <div class="d-flex align-items-center">
      <h1 class="m-auto me-sm-auto"><a class="purple fw-bold" href="<?php echo home_url(); ?>/">YUUKA KICK FIT</a></h1>
      <nav id="navbar" class="navbar d-none d-md-block">
        <ul class="d-flex gap-4 mb-0">
          <li><a <?php if( is_front_page() ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/">ホーム</a></li>
          <li><a <?php if( is_page('about') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/about">施設案内</a></li>
          <li><a <?php if( is_page('course') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/course">コース紹介</a></li>
          <li><a <?php if( is_page('trainer') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/trainer">トレーナー紹介</a></li>
          <li><a <?php if( is_page('blogs') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/blogs">新着記事</a></li>
          <li><a <?php if( is_page('contact') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </div>
</header>