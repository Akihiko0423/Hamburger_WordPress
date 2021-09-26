<div class = "l-sidebar">
    <div class = "p-menu">
        <h2 class = "p-menu__title">Menu</h2>
        <!--タブレット時のメニューバーの×ボタン-->
        <div class = "p-close-btn"><span class="batsu"></span></div>
        <?php wp_nav_menu( array('menu' => 'category-menu')); ?>
    </div>
</div>

<!--ユーザーがログインしてるときにサイドバーをadminbar分下げる-->
<?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
    @media (max-width: 1024px) {
        /* スタイルシートの記述 */
        .l-sidebar {
            margin-top:32px;
        }
    }
    </style>
<?php endif; ?>
