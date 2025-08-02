<?php get_header(); ?>
 <main class="main">
      <section class="notice">
        <div class="home">
          <p class="home_center"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></p>
          <p class="home_next">お知らせ一覧</p>
        </div>

        <div class="arctivite_section-title">
          <div class="main-title">
            <h3 class="main-title_name">お知らせ一覧</h3>
          </div>
        </div>

         <?php
        $child_categories = get_child_categories_by_slug('category');
        ?>
        <ul class="notice_label">

                  <li class="label-style_second">
            <a href="<?php echo esc_url($child_cat_link); ?>">
              <span class="label-style_mode">すべて</span>
            </a>
          </li>
            <?php
            if ($child_categories && !empty($child_categories)) {
                $category_count = 1;

                foreach ($child_categories as $child_category) {
                    $child_cat_link = get_category_link($child_category->term_id);
                    ?>
                    <li class="label-style_second">
                        <a href="<?php echo esc_url($child_cat_link); ?>">
                            <span class="label-style_mode">カテゴリー<?php echo $category_count; ?></span>
                        </a>
                    </li>
                    <?php
                    $category_count++;
                }
            } else {
                echo '<li>表示できる子カテゴリーがありません。</li>';
            }
            ?>
        </ul>
        
        <?php
    // archive.php の残りのコンテンツ（例: このアーカイブに属する投稿リストの表示）
    // WordPressの標準ループを使って、現在のアーカイブの投稿を表示
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title( '<h2>', '</h2>' ); // 投稿タイトル
            the_content(); // 投稿内容
        endwhile;
    else :
        echo '<p>投稿が見つかりませんでした。</p>';
    endif;
    ?>

      </section>

      <section class="notice_box">
        <div class="news_inner">
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/logo-2.svg"
                  alt="new-image"
                  class="new-box_img"
                  width="87px"
                  height="56px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/work-bokujo01.webp"
                  alt="new-image"
                  class="new-box_img"
                  width="100%"
                  height="199px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/work-ec04.webp"
                  alt="new-image"
                  class="new-box_img"
                  width="100%"
                  height="199px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/logo-2.svg"
                  alt="new-image"
                  class="new-box_img"
                  width="87px"
                  height="56px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/work-nouen04.webp"
                  alt="new-image"
                  class="new-box_img"
                  width="100%"
                  height="199px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/work-ec03.webp"
                  alt="new-image"
                  class="new-box_img"
                  width="100%"
                  height="199px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/work-bokujo02.webp"
                  alt="new-image"
                  class="new-box_img"
                  width="100%"
                  height="199px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/work-bokujo04.webp"
                  alt="new-image"
                  class="new-box_img"
                  width="100%"
                  height="199px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/work-nouen01.webp"
                  alt="new-image"
                  class="new-box_img"
                  width="100%"
                  height="199px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="new-box">
            <span class="new-box_part">カテゴリ</span>
            <a
              href="/WEBtest/html/arctovote_single.html"
              class="new-box_access"
            >
              <div class="new-box_style">
                <img
                  src="/WEBtest/img/work-nouen03.webp"
                  alt="new-image"
                  class="new-box_img"
                  width="100%"
                  height="199px"
                />
                <div class="new-box_inner">
                  <span class="new-box_time">YY.MM.DD</span>
                  <p class="new-box_copy">
                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/logo-2.svg"
                alt="new-image"
                width="82px"
                height="64px"
                class="new-box2_img"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/work-bokujo01.webp"
                alt="new-image"
                width="100%"
                height="100%"
                class="new-box2_img2"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/work-ec04.webp"
                alt="new-image"
                width="100%"
                height="100%"
                class="new-box2_img2"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/logo-2.svg"
                alt="new-image"
                width="82px"
                height="64px"
                class="new-box2_img"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/work-nouen04.webp"
                alt="new-image"
                width="100%"
                height="100%"
                class="new-box2_img2"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/work-ec03.webp"
                alt="new-image"
                width="100%"
                height="100%"
                class="new-box2_img2"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/work-bokujo02.webp"
                alt="new-image"
                width="100%"
                height="100%"
                class="new-box2_img2"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/work-bokujo04.webp"
                alt="new-image"
                width="100%"
                height="100%"
                class="new-box2_img2"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/work-nouen01.webp"
                alt="new-image"
                width="100%"
                height="100%"
                class="new-box2_img2"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
          <div class="new-box2">
            <div class="new-box2_style">
              <img
                src="/WEBtest/img/work-nouen03.webp"
                alt="new-image"
                width="100%"
                height="100%"
                class="new-box2_img2"
              />
            </div>
            <div class="new-box2_inner">
              <span class="new-box2_part">カテゴリ</span>
              <span class="new-box2_time">YY.MM.DD</span>
              <p class="new-box2_copy">
                タイトルが入ります。タイトルが入ります。タイトルが入ります。
              </p>
              <p class="new-box2_copy2">
                本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。
              </p>
            </div>
          </div>
        </div>

        <div class="news_pagination">
          <div class="pagination">
            <a href="" class="pagination_numbers pagination_numbers__back"></a>
            <a href="" class="pagination_numbers">1</a>
            <a href="" class="pagination_numbers">2</a>
            <a href="" class="pagination_numbers pagination_numbers__next"></a>
          </div>
        </div>
      </section>

      <section class="top_faq">
        <div class="top_faq-inner">
          <div class="top_faq-box">
            <h2 class="faq_top-title">お問い合わせ</h2>

            <div class="faq_text">
              <p class="top_faq-copy">
                お仕事のご相談、農園体験、牧場の見学、その他質問<br />
                お気軽にお問い合わせください。
              </p>
            </div>
            <button class="top_faq-btn">お問い合わせ</button>

            <div class="faq_contact2">
              問い合わせ電話：
              <div class="faq_contact-number2">123-4567-8910</div>
            </div>

            <div class="faq_contact_arctivite">
              【受付時間】 <br class="faq_contact_br2" />
              10:00 ~ 18:00（土日祝を除く）
            </div>
            
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>