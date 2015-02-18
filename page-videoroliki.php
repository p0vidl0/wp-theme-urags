<?php
/**
 * Файл Index.php
 *
 *
 * Отображает страницы сайта, работающего на WordPress
 *
 * @package WordPress
 * @subpackage urags74-ru
 * @since Urags74.ru 1.0
 */
get_header(); ?>
    <div class="middle shadow-middle">
            <div class="middle-container">
                <div class="container">
                        <main class="content">
                        <?php 
                            /*
                             * Template name: Моя галерея
                             */
                            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $params = array(
                                'posts_per_page' => 3,
                                'category_name' => 'videoroliki',
                                'paged' => $current_page
                            );
                            query_posts($params);
                             
                            $wp_query->is_archive = true;
                            $wp_query->is_home = false;
                             
                            while(have_posts()): the_post();
                               ?><a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
                                <p><?php the_content() ?></p><?php

                            endwhile;
                             
                            wp_pagenavi();
                        ?>
                        </main><!-- .content -->
                </div><!-- .container-->
                <?php get_sidebar('left'); ?>    
                <?php get_sidebar('right-content'); ?>                
            </div>						                        
            <?php get_footer(); ?>