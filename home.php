<?php
/**
 * Файл Home.php
 *
 *
 * Отображает Главную страницу сайта, работающего на WordPress
 *
 * @package WordPress
 * @subpackage urags74-ru
 * @since Urags74.ru 1.0
 */
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
                        <div class="head-banner-block-label"><span>Наshи партнеры</span></div>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- urags-top -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:425px;height:170px"
                                 data-ad-client="ca-pub-0920512869330029"
                                 data-ad-slot="7217315374"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div> 
            <div class="top-divider divider">
                <img src="<?php echo get_template_directory_uri(); ?>/images/content_divider_t.png" alt="top-divider" width="990">
            </div>
            <div class="middle-container">
                <div class="container">
                        <main class="content">
                                <div class="content-news">
                                    <h2>Новости</h2>
                                    <?php $the_query = new WP_Query( array(
                                        'showposts' => 5,
                                        'category_name' => 'novosti'
                                        )); ?>
                                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                        <div class="content-news-item"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                            <div class="entry-meta">
                                                <span class="entry-date">Дата публикации:
                                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                        <time class="entry-date" datetime="<?php the_time('c'); ?>"><?php the_time('d.m.Y'); ?></time>
                                                    </a>
                                                </span>		
                                            </div><!-- .entry-meta -->
                                            <?php the_content(__('[подробнее…]')); ?><hr />
                                        </div>
                                    <?php endwhile;?>
                                    <a href="/category/novosti">Все новости</a>
                                </div>
                                <div class="content-alerts">
                                    <h2>Объявления</h2>
                                    <?php $the_query = new WP_Query( array(
                                        'showposts' => 5,
                                        'category_name' => 'obyavleniya'
                                        )); ?>
                                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                        <div class="content-alerts-item">
                                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                            <div class="entry-meta">
                                                <span class="entry-date">Дата публикации:
                                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                        <time class="entry-date" datetime="<?php the_time('c'); ?>"><?php the_time('d.m.Y'); ?></time>
                                                    </a>
                                                </span>		
                                            </div><!-- .entry-meta -->
                                            <?php the_content(__('[подробнее…]')); ?><hr />
                                        </div>
                                    <?php endwhile;?>
                                    <a href="/category/obyavleniya">Все объявления</a>
                                </div>
                        </main><!-- .content -->
                </div><!-- .container-->

                <?php get_sidebar('left'); ?>

                <?php get_sidebar('right'); ?>
            </div>            
            <?php get_footer(); ?>