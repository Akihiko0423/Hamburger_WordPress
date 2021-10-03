<?php get_header(); ?>
  <!--main part-->
  <main class = "l-main">
    <!--mainvisual-->
    <div class = "p-404main">
      <p class = "p-404main__text">お探しのページが見つかりませんでした。</p>
      <p class = "p-404main__link">申し訳ございませんが、<a href="<?php echo esc_url( home_url( '/' ) ); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
    </div>

  </main>
  <!--sidebar part-->
  <?php get_sidebar(); ?>
<?php get_footer(); ?>