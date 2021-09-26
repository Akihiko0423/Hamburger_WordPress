<footer class = "l-footer">
    <div class = "p-footer">
        <?php 
            $page = get_page_by_path( 'shop-info' );
            $page_id = $page->ID;
        ?>
        <p class = "p-footer-shop-info"><a href = "<?php echo get_permalink($page_id); ?>">ショップ情報 | ヒストリー</a></p>
        <p class = "p-footer-text">Copyright: Akihiko</p>
    </div>
</footer>
    </div>

    <?php 
    wp_enqueue_script('hamburger-site-home', get_template_directory_uri() . '/assets/js/script.js');
    wp_footer(); 
    ?>
  </body>
</html>