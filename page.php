<?php
global $wp_path;
global $site_url;
?>

<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>
<?php get_template_part('./template/sidebar');?>

<main class="main">

    <div class="center-item back_img comp">
        <div class="comppage inner-content">
            <?php
                // ページのタイトルを表示
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content(); // 固定ページのコンテンツを表示
                    endwhile;
                endif;
            ?>
        </div>

        <?php
            get_template_part('./template/access2');
        ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?>