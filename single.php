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
                            // Start the Loop.
                            while ( have_posts() ) : the_post();
                                the_title('<h1>','</h1>',true); ?>
                                <div class="entry-meta">
                                    <span class="entry-date">Дата публикации:
                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                            <time class="entry-date" datetime="<?php the_time('c'); ?>"><?php the_time('d.m.Y'); ?></time>
                                        </a>
                                    </span>		
            					</div><!-- .entry-meta -->
                                <?php the_content();
                            endwhile;
                            ?>
                        </main><!-- .content -->
                </div><!-- .container-->
                <?php get_sidebar('left'); ?>    
                <?php get_sidebar('right'); ?>                
            </div>						                        
            <?php get_footer(); ?>