<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="keywords" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon" />
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
<!-- Template Main CSS File -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/main.css" rel="stylesheet" />
<?php wp_head(); ?>
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="logo">
      <h1><a href="<?php echo home_url(); ?>/">資産運用アドバイザー IFA 鈴木義典</a></h1>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a <?php if( is_front_page() ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/">ホーム</a></li>
        <li><a <?php if( is_page('ifa') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/ifa">IFAとは</a></li>
        <li><a <?php if( is_page('profile') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/profile">プロフィール</a></li>
        <li><a <?php if( is_page('blogs') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/blogs">新着記事</a></li>
        <li><a <?php if( is_page('access') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/access">アクセス</a></li>
        <li><a <?php if( is_page('contact') ): ?> class="active" <?php endif; ?> href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header>