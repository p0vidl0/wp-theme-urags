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
?>
                <aside class="right-sidebar">
                    <div class="sidebar-block">
                        <div class="sidebar-block-label">
                            <span>Это интересно</span>
                        </div>
                        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <?php endif; ?>
                        <div>
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- mdvk -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-0920512869330029"
                                 data-ad-slot="7263491374"
                                 data-ad-format="auto"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            <br />
                        </div>
                    </div>
                    <div class="sidebar-block sidebar-spacer">
                        <div class="sidebar-block-label">
                            <span>Удели внимание</span>
                        </div>
                        <div>
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- mdvk -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-0920512869330029"
                                 data-ad-slot="7263491374"
                                 data-ad-format="auto"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            <br />
                        </div>
                    </div>
                </aside><!-- .right-sidebar -->