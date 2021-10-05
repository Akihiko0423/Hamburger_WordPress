<?php get_header(); ?>
  <!--main part-->
  <main class = "l-main">
    <!--mainvisual-->
    <div class = "p-single">
      <h2 class = "p-single__title"><?php the_title(); ?></h2>
      <div class = "p-single__inner">
        <div class = "p-single__inner__visual">
          <?php 
          if(function_exists('get_field')){
            $pic = get_field('pic'); 
            $pic_url = $pic['sizes']['large'];
          }
          else{
            echo "Advanced Custom Fieldsを利用しています。プラグインのAdvanced Custom Fieldsを有効化してください。";
            $pic_url = "#";
          }
          ?>
          <img src="<?php echo $pic_url; ?>" alt="画像">
        </div>
        <div class = "p-single__inner__text">
          <p>価格:
            <?php 
              if(function_exists('get_field')){
              the_field('price');
              }
              else{
                null;
              }
            ?>
          円(税込み)</p>
          <p>カロリー:
            <?php 
            if(function_exists('get_field')){
              echo number_format(get_field('calorie')); 
            }
            else{
              null;
            }
            ?>kcal</p>
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