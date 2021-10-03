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
          <div class = "p-main-map__photo">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24040.537438956406!2d-102.98690702423643!3d41.13305939779752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8771ad7f06e85cb5%3A0x293ff5ffa0d87bf3!2z44Ki44Oh44Oq44Kr5ZCI6KGG5Zu9IOOAkjY5MTYyIOODjeODluODqeOCueOCq-W3niDjgrfjg4njg4vjg7w!5e0!3m2!1sja!2sjp!4v1633240203429!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
          </div>
          <div class = "p-main-map__text">
            <h3>地図を埋め込みました</h3>
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