<!DOCTYPE html>
<html lang="ja">
  <head>
    <!--  ogp: <head prefix=”og:http:------ fb:http:------------- website:http:------->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/ress@4.0.0/dist/ress.min.css"
    />
    <title>WEB test 農園</title>

    <!-- js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
    <script src="../java/main.js" defer></script>

    <!-- ogp -->
    <meta property=”og:url” content=”https://WEBtest/html/index.html” />
    <meta property="”og:type”" content="”website”" />
    <meta
      property="”og:title”"
      content="”自然の恵み農園｜自然の恵みを感じ、豊かな未来をつくる”"
    />
    <meta property="”og:image”" content="”ogp-image.png”" />
    <meta property="”og:site_name”" content="”自然の恵み農園”" />
    <meta
      property="”og:description”"
      content="”自然の恵み農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行っています。”"
    />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary_large_image」" />
    <meta name="twitter:site" content="Xアカウント名" />
    <meta property="”fb:app_id”" content="”FacebookのアプリID”" />
<?php wp_head(); ?>
  </head>

  <body>
    <header class="header">
      <div class="header_inner">
        <div class="header_logo-link">
          <a href="<?php echo esc_url(home_url()); ?>">

            <img
              src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.svg'); ?>"
              alt="header_logo-link"
              width="100%"
              height="100%"
              class="header_logo-link_img"
            />
          </a>
        </div>

        <div class="header_menu-box">
          <!--  -->
          <div class="hamburger_menu">
            <span class="hamburger_menu-bar"></span>
            <span class="hamburger_menu-bar"></span>
          </div>
          <p class="menu-txt">MENU</p>
        </div>

        <div class="header_box">
          <nav class="header-nav">
            <ul class="header-nav_list">
              <li class="header-nav_list_item">
                <a href="<?php echo esc_url(home_url()); ?>" class="header-nav_link"
                  >私たちについて</a
                >
              </li>
              <li class="header-nav_list_item">
                <a href="<?php echo esc_url(home_url()); ?>" class="header-nav_link">活動紹介</a>
              </li>
              <li class="header-nav_list_item">
                <a href="<?php echo esc_url(home_url()); ?>" class="header-nav_link"
                  >よくあるご質問</a
                >
              </li>
              <li class="header-nav_list_item">
                <a href="<?php echo esc_url(get_category_link(get_cat_ID('category'))); ?>" class="header-nav_link">お知らせ</a>
              </li>
              <li class="header-nav_list_item">
                <a href="<?php echo esc_url(home_url()); ?>" class="header-nav_link">アクセス</a>
              </li>
              <li class="header-nav_list_item">
                <a href="<?php echo esc_url(home_url()); ?>" class="header-nav_link">お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <!-- お知らせのところをクリックしたら、飛ばす方法を考える！！！！！！！！！！！！！！！ --    git add .>