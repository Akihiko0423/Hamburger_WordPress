<?php get_header(); ?>
      <!--main part-->
      <main class = "l-main">
        <!--mainvisual-->
        <div class = "p-page-main-visual">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class = "p-page-main-heading">
          <?php the_content(); ?>
        </div>
      </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>