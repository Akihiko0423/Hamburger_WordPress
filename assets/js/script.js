jQuery(function($) {
    $('.p-header__menu-btn').click(function(){
        $('.l-sidebar').addClass('open'); //サイドバーのスライド
        $('.l-sidebar').addClass('open-slide'); //サイドバーのスライド
        $('.c-tablet-background--gray').addClass('open');//グレー背景の表示
        $('.p-menu').addClass('open');
        $('body').addClass('open-toggle');//グレー背景の表示
    });

    $('.p-close-btn').click(function(){
        $('.l-sidebar').removeClass('open-slide');//サイドバーのスライド
        $('.l-sidebar').removeClass('open');//サイドバーのスライド
        $('.c-tablet-background--gray').removeClass('open');//グレー背景の非表示
        $('.p-menu').removeClass('open');
        $('body').removeClass('open-toggle');//グレー背景の表示
    });    
});