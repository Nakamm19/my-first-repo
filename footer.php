    <footer class="footer">
      <div class="footer_inner">

        <div class="footer_logo">
          <a href="footer_logo">
            <img src="<?php echo esc_url(get_template_directory_uri (). '/img/logo.svg' ); ?>"
            width="202px"
            height="35px"/>
          </a>
        </div>

        <div class="footer_address-map">
          〒123-4567<br />
          千葉県〇〇市××町1丁目23-45
        </div>
        <div class="footer_address-tel">
          TEL：<a href="" class="footer_address-link">123-4567-8910</a> <br />
          FAX：<a href="" class="footer_address-link">12-345-6789</a>
        </div>

        <div class="footer_box">
          <nav class="footer_nav">
            <ul class="footer_nav-list">
              <li class="footer_nav-item">
                <a href="<?php echo esc_url(home_url()); ?>" class="footer_nav-link">ホーム</a>
              </li>
              <li class="footer_nav-item">
                <a href="<?php echo esc_url(home_url()); ?>" class="footer_nav-link"
                  >私たちについて</a
                >
              </li>
              <li class="footer_nav-item">
                <a href="<?php echo esc_url(home_url()); ?>" class="footer_nav-link">活動紹介</a>
              </li>
              <li class="footer_nav-item">
                <a href="<?php echo esc_url(home_url()); ?>" class="footer_nav-link"
                  >よくあるご質問</a
                >
              </li>
              <li class="footer_nav-item">
                <a href="<?php echo esc_url(home_url()); ?>" class="footer_nav-link">お知らせ</a>
              </li>
              <li class="footer_nav-item">
                <a href="<?php echo esc_url(home_url()); ?>" class="footer_nav-link">アクセス</a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="footer_icon">
          <nav class="icon_nav">
            <ul class="icon_nav-list">
              <li class="icon_nav-item">
                <a href=""
                  ><img
                    src="<?php echo esc_url(get_template_directory_uri().'/img/x-icon.svg'); ?>"
                    alt="X"
                    class="icon_nav-img"
                /></a>
              </li>
              <li class="icon_nav-item">
                <a href=""
                  ><img
                    src="<?php echo esc_url(get_template_directory_uri().'/img/insta-icon.svg'); ?>"
                    alt="Instagram"
                    class="icon_nav-img"
                /></a>
              </li>
              <li class="icon_nav-item">
                <a href=""
                  ><img
                    src="<?php echo esc_url(get_template_directory_uri()).'/img/youtube-icon.svg'; ?>"
                    alt="Youtube"
                    class="icon_nav-img"
                /></a>
              </li>
            </ul>
          </nav>
        </div>
        <p class="footer_copy">
          ©︎ <a href="" class="footer_copy-link">shizen-no-megumi-nouen Inc .</a> 2023
        </p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
