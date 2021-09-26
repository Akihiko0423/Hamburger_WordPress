<?php get_header(); ?>
  <!--main part-->
  <main class = "l-main">
    <!--main-visual part-->
    <div class = "p-main-visual"><!--mainvisual画像-->
      <h2 class = "p-main-visual__title">ダミーサイト</h2>
    </div>
    <!--main-section part-->
    <div class = "p-main-section">
      <section class = "p-takeout"><!--takeout画像-->
        <h3 class = "p-takeout__title">
          <?php
            $page = get_page_by_path( 'takeout' );
            $page_id = $page->ID;
          ?>
          <a href = "<?php echo get_permalink($page_id); ?>">Take Out</a>
        </h3>
        <div class = "p-takeout__detail--top c-takeout-detail">
          <h4>Take OUT</h4>
          <p>当店のテイクアウトで利用できる商品を掲載しています</p>
        </div>
        <div class = "p-takeout__detail--bottom c-takeout-detail">
          <h4>Take OUT</h4>
          <p>当店のテイクアウトで利用できる商品を掲載しています</p>
        </div>
      </section>

      <section class = "p-eatin"><!--eatin画像-->
        <h3 class = "p-eatin__title">
          <?php 
            $page = get_page_by_path( 'eatin' );
            $page_id = $page->ID;
          ?>
          <a href = "<?php echo get_permalink($page_id); ?>">Eat In</a>
        </h3>
        <div class = "p-eatin__detail--top c-takeout-detail">
          <h4>Take OUT</h4>
          <p>当店のテイクアウトで利用できる商品を掲載しています</p>
        </div>
        <div class = "p-eatin__detail--bottom c-takeout-detail">
          <h4>Take OUT</h4>
          <p>当店のテイクアウトで利用できる商品を掲載しています</p>
        </div>
      </section>
    </div>
        <!--map part-->
        <div class = "p-main-map">
          <div class = "p-background-black"></div>
          <div class = "p-background-gray"></div>
          <div class = "p-main-map__photo"></div>
          <div class = "p-main-map__text">
            <h3>見出しが入ります</h3>
            <p>
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
        </div>
      </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>