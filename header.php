<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage urags74-ru
 * @since Urags74.ru 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <meta name="telderi" content="510951892da51dfb66cc73b47c10711f" />
    <meta name="rpc3fb563b846e4559abb4f5b96649a528" content="071786812351a5cf7266a2e2955cfe92" />
	<meta name="robots" content="index, follow">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <!-- SmartMenus core CSS (required) -->
        <link href="<?php echo get_template_directory_uri(); ?>/plugins/smartmenus-0.9.7/css/sm-core-css.css" rel="stylesheet" type="text/css" />
        <!-- "sm-urags-top" menu theme (optional, you can use your own CSS, too) -->
        <link href="<?php echo get_template_directory_uri(); ?>/plugins/smartmenus-0.9.7/css/sm-urags-top/sm-urags-top.css" rel="stylesheet" type="text/css" />

        <!-- #main-menu config - instance specific stuff not covered in the theme -->
<style type="text/css">
	#main-menu {
		position:relative;
		z-index:9999;
		width:1024px;
                margin: 0 auto; 
	}
	#main-menu ul {
		width:12em; /* fixed width only please - you can use the "subMenusMinWidth"/"subMenusMaxWidth" script options to override this if you like */
	}
</style>

<style type="text/css">
.fadein {
position:relative;
height:240px;
width:540px;
}
.fadein img {
position:absolute;
left:0;
top:0;
}
</style>


<!-- jQuery -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/smartmenus-0.9.7/libs/jquery/jquery.js"></script>
    <!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/smartmenus-0.9.7/jquery.smartmenus.js"></script>

<!-- SmartMenus jQuery init -->
<script type="text/javascript">
    $(function() {
        $('#main-menu').smartmenus({
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
        });
    });
</script>

<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
<!-- pr-cy 135f4cf1f36960d91affe8d5397403a0 -->
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <nav class="top-nav" <?php if ( is_user_logged_in() && current_user_can('administrator') ) echo 'style="top:32px;"';?>>
                <div class="top-nav-wrapper">
                    <ul class="top-menu sm sm-urags-top" id="main-menu">
                        <li id="current" class="nav"><a href="/"><span>Главная </span><span class="sub">основная информация</span></a>
                            <ul class="">
                                <li class=""><a href="/upravlenie-i-struktura-filiala.html"><span>Структура филиала</span></a>
                                    <ul class=""><li class=""><a href="/administrativno-upravlencheskij-personal.html"><span>Администрация</span></a></li>
                                        <li class=""><a href="/otdely.html"><span>Отделы</span></a>
                                            <ul class="">
                                                <li class=""><a href="/uchebno-metodicheskij-otdel.html"><span>Методический отдел</span></a></li>
                                                <li class=""><a href="/otdel-dopolnitelnogo-obrazovaniya.html"><span>Отдел дополнительного образования</span></a></li>
                                                <li class=""><a href="/otdel-informacionnyx-texnologij.html"><span>Отдел информационных технологий</span></a></li>
                                                <li class=""><a href="/xozyajstvennyj-otdel.html"><span>Хозяйственный отдел</span></a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="/kafedry.html"><span>Кафедры</span></a>
                                            <ul class="">
                                                <li class=""><a href="/kafedra-estestvenno-nauchnyx-i-socialno-gumanitarnyx-disciplin.html"><span>Кафедра естественно-научных и социально-гуманитарных дисциплин</span></a></li>
                                                <li class=""><a href="/kafedra-ekonomiki-i-upravleniya.html"><span>Кафедра экономики и управления</span></a></li>
                                                <li class=""><a href="/kafedra-gosudarstvenno-pravovyx-disciplin.html"><span>Кафедра государственно-правовых дисциплин</span></a></li>
                                                <li class=""><a href="/kafedra-grazhdansko-pravovyx-disciplin.html"><span>Кафедра гражданско-правовых дисциплин</span></a></li>
                                                <li class=""><a href="/kafedra-teorii-i-istorii-gosudarstva-i-prava.html"><span>Кафедра теории и истории государства и права</span></a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="/biblioteka.html"><span>Библиотека</span></a></li>
                                        <li class=""><a href="/buxgalteriya.html"><span>Бухгалтерия</span></a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/letopis-filiala.html"><span>Летопись филиала</span></a></li>
                                <li class=""><a href="/oficialnye-dokumenty.html"><span>Официальные документы</span></a></li>
                                <li class=""><a href="/uchebno-materialnaya-baza.html"><span>Материальная база</span></a></li>
                                <li class=""><a href="/sistema-ranxigs.html"><span>Система РАНХиГС</span></a></li>
                                <li class=""><a href="/nauchnaya-rabota.html"><span>Научная работа</span></a></li>
                                <li class=""><a href="/poleznye-ssylki.html"><span>Информационные ресурсы</span></a>
                                    <ul class="">
                                        <li class=""><a href="/biblioteka-2.html"><span>Библиотека</span></a></li>
                                        <li class=""><a href="/elektronnyj-katalog.html"><span>Электронный каталог</span></a></li>
                                        <li class=""><a href="/uchebno-metodicheskie-kompleksy.html"><span>УМК</span></a></li>
                                        <li class=""><a href="/poleznye-ssylki.html"><span>Полезные ссылки</span></a></li>
                                        <li class=""><a href="#"><span>Поиск по сайту</span></a></li>
                                        <li class=""><a href="#"><span>Карта сайта</span></a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/telefonnyj-spravochnik.html"><span>Телефонный справочник</span></a></li>
                                <li class=""><a href="/videoroliki"><span>Видеоролики</span></a></li>
                                <li class=""><a href="/category/novosti"><span>Новости</span></a></li>
                                <li class=""><a href="/category/obyavleniya"><span>Объявления</span></a></li>
                            </ul>
                        </li>
                        <li class="nav"><a href="/abiturientam.html"><span>Абитуриентам </span><span class="sub">основная информация</span></a>
                            <ul class="">       
                                <li class=""><a href="/priem-2015.html"><span>Прием 2015</span></a></li>                     
                                <li class=""><a href="/napravleniya-podgotovki.html"><span>Направления бакалавриата</span></a>
                                    <ul class="">
                                        <li class=""><a href="/030900-62-yurisprudenciya.html"><span>030900.62 «Юриспруденция»</span></a></li>
                                        <li class=""><a href="/080100-62-ekonomika.html"><span>080100.62 «Экономика»</span></a></li>
                                        <li class=""><a href="/080200-62-menedzhment.html"><span>080200.62 «Менеджмент»</span></a></li>
                                        <li class=""><a href="/080400-62-upravlenie-personalom.html"><span>080400.62 «Управление персоналом»</span></a></li>
                                        <li class=""><a href="/081100-62-gosudarstvennoe-i-municipalnoe-upravlenie.html"><span>081100.62 «Государственное и муниципальное управление»</span></a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="/priemnaya-komissiya.html"><span>Приемная комиссия</span></a></li>
                                <li class=""><a href="/perechen-vstupitelnyx-ispytanij.html"><span>Перечень вступительных испытаний</span></a></li>
                                <li class=""><a href="/dinamika-priema.html"><span>Динамика приема</span></a></li>
                                <li class=""><a href="/trebovaniya-dlya-postupayushhix.html"><span>Требования для поступающих</span></a></li>
                                <li class=""><a href="/vstupitelnye-ispytaniya-ege.html"><span>Вступительные испытания (ЕГЭ)</span></a></li>
                                <li class=""><a href="/dokumenty-po-pochte.html"><span>Документы по почте</span></a></li>
                                <li class=""><a href="#"><span>Списки на зачисление</span></a></li>
                            </ul>
                        </li>
                        <li class="nav"><a href="/studentam.html"><span>Студентам </span><span class="sub">группы, расписание, сессия</span></a>
                        <ul class="">                            
                                <li class=""><a href="/ochnoe-otdelenie.html"><span>Очное отделение</span></a></li>
                                <li class=""><a href="/zaochnoe-otdelenie.html"><span>Заочное отделение</span></a></li>
                                <li class=""><a href="/grafik-priezda-pps.html"><span>График приезда ППС</span></a></li>
                                <li class=""><a href="/praktika-studentov-2.html"><span>Практика студентов</span></a></li>
                                <li class=""><a href="/yuridicheskaya-klinika-2.html"><span>Юридическая клиника</span></a></li>
                            </ul>
                        </li>
                        <li class="nav"><a href="/slushatelyam.html"><span>Слушателям </span><span class="sub">дополнительное образование</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="logo-wrapper">
                <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Магнитогорский филиал РАНХиГС" style="display: block;">
                </div>
            </div>            
	</header><!-- .header-->