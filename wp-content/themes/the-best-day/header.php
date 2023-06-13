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
				<a href="/" class="header__logo">ЛучшийДень.рф</a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'container' => false,
					'menu_class' => 'nav-list'
				))
				?>
			</div>
			<?php
				if (is_user_logged_in()) {
					?>
					<a class="header__profile" href="/profile">Личный кабинет</a>
					<?php
				} else {
					?>
					<a class="header__profile" href="/login">Для организаторов</a>
			<?php
				}
			?>

		</div>
		<div class="header__wrapper--mobile">
			<svg onclick="disableScroll()" class="ham hamRotate ham8" viewBox="0 0 100 100" width="60">
				<path
					class="line top"
					d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
				<path
					class="line middle"
					d="m 30,50 h 40" />
				<path
					class="line bottom"
					d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
			</svg>
			<aside class="menu__mobile">
				<ul class="aside__list">
					<li class="aside__element"><a href="#">Топ месяца</a></li>
					<li class="aside__element"><a href="#">Онлайн движ</a></li>
					<li class="aside__element"><a href="#">Инста-место</a></li>
					<li class="aside__element"><a href="#">Журнал ЛД</a></li>
					<li class="aside__element"><a href="#">Для огранизаторов</a></li>
				</ul>
			</aside>
			<a href="/" class="header__logo">ЛучшийДень.рф</a>
		</div>
	</header><!-- #masthead -->

	<script>
		function disableScroll() {
			let body = document.querySelector("body");
			window.scrollTo({
				top: 0,
			});
			body.classList.toggle('no_scroll');
		}
	</script>