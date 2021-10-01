<?php get_header(); ?>
  <!--main part-->
  <main class = "l-main">
    <!--mainvisual-->
    <div class = "p-single">
      <h2 class = "p-single__title"><?php the_title(); ?></h2>
      <div class = "p-single__inner">
        <div class = "p-single__inner__visual">
          <?php 
          $pic = get_field('pic'); 
          $pic_url = $pic['sizes']['large'];
          ?>
          <img src="<?php echo $pic_url; ?>" alt="画像">
        </div>
        <div class = "p-single__inner__text">
          <p>価格:<?php the_field('price'); ?>円(税込み)</p>
          <p>カロリー:<?php echo number_format(get_field('calorie')); ?>kcal</p>
        </div>
      </div>
      <div class = "content">
        <?php the_content(); ?>
      </div>
    </div>

  </main>
  <!--sidebar part-->
  <?php get_sidebar(); ?>
<?php get_footer(); ?>