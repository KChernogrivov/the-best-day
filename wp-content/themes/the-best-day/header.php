<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="header">
		<div class="header__wrapper">
			<div class="header__nav">
				<a href="#" class="header__logo">ЛучшийДень.рф</a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'container' => false,
					'menu_class' => 'nav-list'
				))
				?>
<!--				<ul class="nav-list">-->
<!--					<li class="nav-list__link"><a href="#">Топ месяца</a></li>-->
<!--					<li class="nav-list__link"><a href="#">Онлайн движ</a></li>-->
<!--					<li class="nav-list__link"><a href="#">Инста-место</a></li>-->
<!--					<li class="nav-list__link"><a href="#">Журнал ЛД</a></li>-->
<!--				</ul>-->
			</div>
			<a class="header__profile" href="#">Для организаторов</a>
		</div>
	</header><!-- #masthead -->
