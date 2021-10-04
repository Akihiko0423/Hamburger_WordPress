<?php get_header(); ?>
  <!--main part-->
    <main class = "l-main">
      <div class = "p-archive-main-visual">
        <h1>Menu:<span class = "p"><?php the_category(); ?></span></h1>
      </div>
      <div class = "p-archive-main-section">
        <div class = "p-archive-main-section-text">
          <h2>小見出しが入ります</h2>
          <p>
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>

        <div class = "p-article">
          <!--WordPressループ-->
          <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
              <article id = "post-<?php the_ID(); ?>" <?php post_class('p-article-top'); ?>>
                <div class = "p-article__visual">
                  <?php the_post_thumbnail('large'); ?>
                </div>
                <div class = "p-burger-detail">
                  <h2><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
                <div class = "detail-btn">
                  <a href="<?php the_permalink(); ?>">詳しく見る</a>
                </div>
              </article>
              <?php wp_link_pages(); ?>
            <?php endwhile; ?>
            <?php 
              if(function_exists('wp_pagenavi')){
                wp_pagenavi();
              }
            ?>
            <?php else: ?>
              <p>記事がありません</p>
          <?php endif; ?>
        </div>
        <!--ページネーションを表示-->

      </div>
  </main>

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>

