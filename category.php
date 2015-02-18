<?php
/**
 * Файл Category.php
 *
 *
 * Отображает содержимое выбранной категории
 *
 * @package WordPress
 * @subpackage urags74-ru
 * @since Urags74.ru 1.0
 */
 
 // Custom template tags for this theme.
 

get_header(); ?>
    <div class="middle shadow-middle">
            <div class="home-top">
            <script type="text/javascript">
$(function(){
$('.fadein img:gt(0)').hide();
setInterval(function()
{$('.fadein :first-child').fadeOut(1000).next('img').fadeIn(1000)
.end().appendTo('.fadein');}, 3000);
});
</script>
                <div class="head-slideshow fadein" style="width:540px; height:240px">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide01.jpg" alt="Image 1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide02.jpg" alt="Image 2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide03.jpg" alt="Image 3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide04.jpg" alt="Image 4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide05.jpg" alt="Image 5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slide06.jpg" alt="Image 6">
                </div>
                <div class="head-banner">
                    <div class="head-banner-block">
                        <div class="head-banner-block-label"><span>Наши партнеры</span></div>
                        <a href="http://firstvds.ru/?from=383561" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/firstvds-440.gif" alt="FirstVDS - лучший провайдер виртуальных виделенных серверов!" width="425">
                        </a>
                    </div>
                </div>
            </div> 
            <div class="top-divider divider">
                <img src="<?php echo get_template_directory_uri(); ?>/images/content_divider_t.png" alt="top-divider" width="990">
            </div>
            <div class="middle-container">
                <div class="container">
                        <main class="content">
                                <div class="">
                                   <?php if ( have_posts() ) : ?>

                                    <header class="archive-header">
                                        <h1 class="archive-title"><?php printf( __( 'Наши %s'), single_cat_title( '', false ) ); ?></h1>
                                    </header><!-- .archive-header -->
                                        <?php
                                                // Start the Loop.
                                                while ( have_posts() ) : the_post(); ?>
                                                <div class="category-post">
                                                    <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                                                    <?php the_content(); ?>
                                                </div>
                                                <?php
                                                endwhile;
                                                // Previous/next page navigation.
                                                if (function_exists("pagination")) {
                                                    pagination($additional_loop->max_num_pages);
                                                } else {};

                                            else :
                                                // If no content, include the "No posts found" template.
                                                get_template_part( 'content', 'none' );

                                            endif;
                                        ?>
                                </div>
                        </main><!-- .content -->
                </div><!-- .container-->

                <?php get_sidebar('left'); ?>

                <?php get_sidebar('right'); ?>
            </div>            
            <?php get_footer(); ?>