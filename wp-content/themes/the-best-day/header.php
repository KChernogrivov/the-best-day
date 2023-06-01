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
	</header><!-- #masthead -->
