<?php
global $wp_path;
global $site_url;
?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/front-header');?>

<main class="main">
    <div class="back_img kvback">
        <div class="center-item">
            <div class="inner-content top-kv">
                <div class="top-kv__img">
                    <div class="imgbox">
                        <div id="new-swiper" class="swiper img">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newimgs_2/D__02430.jpg">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newimgs/sushi_Grandmenu.jpg">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/newimgs/sushi_nigiri.png">
                                </div>
                            </div>
                        </div>

                        <h2 class="title">
                            大宮駅から徒歩 7分<br>
                            熟練職人が厳選した旬も<br>
                            四季折々粋な味を堪能
                        </h2>
                    </div>
                </div>

                <div class="top-kv__navbox">
                    <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/newimgs/logo_yabuki.png" alt="">

                    <div class="linkbox">
                        <a class="link" href="/">
                            ジャンプリンク
                        </a>
                        <a class="link" href="/noto">
                            ジャンプリンク
                        </a>
                        <a class="link" href="/reserve-tokyo">
                            ジャンプリンク
                        </a>
                        <a class="link" href="/contact">
                            ジャンプリンク
                        </a>
                    </div>
                </div>
                
            </div>
                
        </div>
    </div>



    <div class="back_img menu">
        <div class="center-item red-border">
            <div class="inner-content concept">
                    <h2 class="top-concept__title lang-ja" style="display: block;">頑張る人に、美味しいエネルギーを！</h2>
                    <p class="top-concept__text lang-ja" style="display: block;">
                        復興に向けて全員で進んでおり、その一環として食という娯楽を楽しんでもらいます。<br>
                        元江戸前鮨職人が心をこめた“おもてなし”を通じて、<br>
                        こだわりのホルモンと特別な空間で楽しいひとときを味わっていただけます。
                    </p>
                    
                    <div class="imgbox">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/newimgs/sushi_nigiri.png" alt="KVイメージ" >
                    </div>

            </div>

            <div class="inner-content">
                <h2 class="top-concept__title lang-ja" style="display: block;">おすすめメニュー</h2>
            </div>


            <div class="inner-content top-menu">

                <div class="top-menu__imgbox">
                    
                    <div class="img2">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/newimgs_2/D__02487.jpg" alt="KVイメージ" >
                        
                    </div>
                </div>
                <div class="top-menu__textbox">

                    <h3 class="subtitle">
                        小鰭磯辺巻
                    </h3>
                    
                    <p class="maintext">
                        酢締めした小鰭ときゅうり、がりを海苔で巻いた逸品
                        風味、食感が新鮮な味わいを引き出す珍しい酒あて
                        生わさびを添えて、お召し上がりください。
                    </p>
                </div>
                
            </div>

            <div class="inner-content top-menuflex">
                <div class="top-menuflex__textbox">
                    <h2 class="title">
                        鰯へしこ
                    </h2>
                    
                    <p class="text">
                        ここでしか食せない珍しい鰯へしこ
                        鯖で出せない、独特苦味と塩味がお酒をそそる
                        大将だからできるへしこを堪能ください。
                    </p>
                    
                </div>
                <div class="top-menuflex__imgbox">
                    <div class="imgbox">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/newimgs_2/D__02480.jpg" alt="KVイメージ" >
                    </div>
                </div>
            </div>

            <div class="inner-content top-menuflex">
                <div class="top-menuflex__imgbox">
                    <div class="imgbox">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/newimgs_2/D__02497.jpg" alt="KVイメージ" >
                    </div>
                </div>
                <div class="top-menuflex__textbox">
                    <h2 class="title">
                        ばくだん納豆
                    </h2>
                    <p class="text">
                        まぐろ、いか、白身魚、ほか
                        贅沢にいくらも盛り込んだくだん納豆
                        パリパリ海苔風味が味を引き立たせます。
                    </p>
                    
                </div>
            </div>

            <div class="inner-content top-menuimg">
                <div class="top-menuing__textbox">
                    <h2 class="big-title lang-ja" style="display: block;">
                        メニュー一覧
                    </h2>
                </div>

                <section class="accordion">
                    <input id="block-01" type="checkbox" class="accordion__toggle">
                    <label class="accordion__label title" for="block-01">メニュー見出し1</label>
                    <div class="accordion__content">
                        <h2 class="content-type sub-title">
                            メニュー種類1
                        </h2>
                        
                        <div class="content-info">
                            <div class="content-name">
                                <p class="text">メニュー1<br>
                                メニュー2<br>
                                </p>
                            </div>

                            <div class="content-price">
                                <p class="text">値段1<br>
                                値段2<br>
                                値段3
                                </p>
                            </div>
                        </div>

                        <h2 class="content-type sub-title">
                            メニュー種類2
                        </h2>
                        <div class="content-info">
                            <div class="content-name">
                                <p class="text">メニュー1<br>
                                メニュー2
                                </p>
                            </div>
                            <div class="content-price">
                                <p class="text">値段1<br>
                                値段2
                                </p>
                            </div>
                        </div>
                    </div>

                    <input id="block-02" type="checkbox" class="accordion__toggle">
                    <label class="accordion__label title" for="block-02">メニュー見出し2</label>
                    <div class="accordion__content">
                        <h2 class="content-type sub-title">
                            メニュー種類1
                        </h2>
                        <div class="content-info">
                            <div class="content-name">
                                <p class="text">メニュー1<br>
                                メニュー2
                                </p>
                            </div>
                            <div class="content-price">
                                <p class="text">値段1<br>
                                値段2
                                </p>
                            </div>
                        </div>

                        <h2 class="content-type sub-title">
                            メニュー種類2
                        </h2>
                        <div class="content-info">
                            <div class="content-name">
                                <p class="text">メニュー1<br>
                                メニュー2
                                </p>
                            </div>
                            <div class="content-price">
                                <p class="text">値段1<br>
                                値段2
                                </p>
                            </div>
                        </div>
                    </div>

                    <input id="block-03" type="checkbox" class="accordion__toggle">
                    <label class="accordion__label title" for="block-03">メニュー見出し3</label>
                    <div class="accordion__content">
                        <h2 class="content-type sub-title">
                            メニュー種類1
                        </h2>                
                        <div class="content-info">
                            <div class="content-name">
                                <p class="text">メニュー1<br>
                                メニュー2
                                </p>
                            </div>
                            <div class="content-price">
                                <p class="text">値段1<br>
                                値段2
                                </p>
                            </div>
                        </div>

                        <h2 class="content-type sub-title">
                            メニュー種類2
                        </h2>
                        <div class="content-info">
                            <div class="content-name">
                                <p class="text">メニュー1<br>
                                メニュー2
                                </p>
                            </div>
                            <div class="content-price">
                                <p class="text">値段1<br>
                                値段2
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="back_img reserve">
        <div class="center-item">
            <div class="inner-content top-insta">
                <div class="top-insta__itembox">
                    <div class="imgbox">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-reserve/TPRE1336.png" alt="">
                    </div>
                    <div class="imgbox">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-reserve/TPRE1336-1.png" alt="">
                    </div>
                    <div class="imgbox">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-reserve/TPRE1336-2.png" alt="">
                    </div>
                    <div class="imgbox">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-reserve/TPRE1336-3.png" alt="">
                    </div>
                    <div class="imgbox sp">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-reserve/TPRE1336-4.png" alt="">
                    </div>
                    <div class="imgbox sp">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-reserve/TPRE1336-5.png" alt="">
                    </div>
                    <div class="imgbox md sp">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-reserve/TPRE1336-6.png" alt="">
                    </div>
                    <div class="imgbox md sp">
                        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-reserve/TPRE1336-7.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="back_img workshop">
        <div class="center-item">
            <div class="inner-content top-workshop">
                <h2 class="top-workshop__title">
                    タイトルテキスト
                </h2>
        
                <p class="top-workshop__text">
                仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト
                仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト
                仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト仮テキスト
                </p>
                <a href="/restaurant" class="top-workshop__button flexlang-ja" style="display: none;">
                    詳しく見る
                    <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top-workshop/arrow.svg" alt="">
                </a>
            </div>
        </div>
    </div>

    <?php
        get_template_part('./template/access1');
    ?> 
</main>

<?php
get_template_part('./template/footer');
?>
