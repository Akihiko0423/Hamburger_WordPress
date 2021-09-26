<form class = "c-search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input id = "s" name = "s" value = "<?php the_search_query(); ?>" class = "c-search-form__keyword" type="text" placeholder="&#xf002; 検索する">
    <input class = "c-search-form__btn" type="submit" value="検索">
</form>