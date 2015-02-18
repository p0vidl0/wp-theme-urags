<?php
/**
 * The Footer for our theme
 *
 * Displays all of the <Footer> section and everything down till <div id="main">
 *
 * @package WordPress
 * @subpackage urags74-ru
 * @since Urags74.ru 1.0
 */
?>
            <div class="bottom-divider divider">
                <img src="<?php echo get_template_directory_uri(); ?>/images/content_divider_b.png" alt="bottom-divider" width="990">
            </div>
            <div class="banners">
                <div class="banner-module">
                    <h3><span class="">Образовательные</span> ресурсы</h3>
                    <center>
                        <a href="http://xn--80abucjiibhv9a.xn--p1ai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/rect.gif" alt="Министерство образования и науки Российской Федерации"></a>
                        <a href="http://www.edu.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/edu130x59.gif" alt="Федеральный портал &quot;Российское образование&quot;" border="0"></a>
                        <br />
                        <a href="http://window.edu.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/eo130x59.gif" alt="Единое окно доступа к образовательным ресурсам" border="0"></a>
                        <a href="http://school-collection.edu.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sc130x59.gif" alt="Единая коллекция цифровых образовательных ресурсов" border="0"></a>
                        <br />
                        <a href="http://fcior.edu.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/fcior130x59.gif" alt="Федеральный центр информационно-образовательных ресурсов" border="0" height="59" width="130"></a>
                        <a href="http://www.naminfo.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sistema_logo.jpg" alt="Система МСУ" border="0" height="80" width="141"></a>
                        <br />
                        <a href="http://www.cntd74.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/kodeks.gif" alt="Кодекс Эксперт" border="0" height="98" width="154"></a>
                    </center>		
                </div>
                <div class="banner-module">
                    <h3><span class="">Информационные</span> ресурсы</h3>
                    <ul class="bannermod">
                        <li><a href="http://pravmin74.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/inf-pravit.jpg" alt="Баннер"></a></li>
                        <li><a href="http://gubernator74.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/inf-gubern.jpg" alt="Баннер"></a></li>        	
                        <li><a href="http://www.kremlin.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sait-prezident.jpg" alt="Баннер"></a></li>
                    </ul>
                    <p> <br /></p>
                </div>
                <div class="banner-module">
                    <h3><span class="">Прочие</span> ресурсы</h3>
                    <center>
                       <a href=http://www.calend.ru/holidays/russtate/ target=_blank><img src="http://www.calend.ru/img/export/informer_1.png" width="150" alt="Праздники России" border="0"></a>
                        <br />
                        <a href="http://www.xn----btbbkcdari3cd5anmkb3d4b.xn--p1ai/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/konkurs200100.gif" alt="Конкурс" border="0" height="100" width="200"></a>
                        <br />
                    </center>
                </div>
            </div>
	</div><!-- .middle-->

	<footer class="footer">
                    <div class="footer-padding">
                        <ul class="footer-links">
                            <li class="item487"><a href="http://ya.ru">Пресса о нас</a></li>
                            <li class="item480"><a href="#">Новости групп</a></li>
                            <li class="item481"><a href="#">НИР</a></li>
                            <li class="item485"><a href="#">Гранты и конкурсы</a></li>
                            <li class="item486"><a href="#">Конференции и семинары</a></li>
                            <li class="item488"><a href="#">Файлы</a></li>
                        </ul>
                        <ul class="footer-menu">
                            <li><p class="footer-copyright">© 2015 Магнитогорский филиал РАНХиГС. Все права защищены.</p></li>
                            <li><a href="#">RSS</a></li>
                            <li><a href="#" class="go-top"></a></li>
                        </ul>
                    </div>
	</footer><!-- .footer -->

</div><!-- .wrapper -->
<?php wp_footer(); ?>
</body>
</html>