<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="author" content="Luan Gjokaj, and WordPressify contributors" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header" class="header">
<div class="container">
	<div class="row hideonmobile">
		<div class="col-md-12 top "><?php wp_nav_menu( array('theme_location' => 'top_menu') ); ?></div>
	</div>
	<div class="row">

		<div class="col-2 mmenu hideondesktop">
			<img src="<?php echo get_template_directory_uri();?>/img/mobile-icon-menu.svg" alt="">
		</div>

		<div class="col-8 col-md-3 logo">
			<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/laika-logo-neg.svg" alt=""></a>
		</div>

		<div class="col-2 search hideondesktop">
			<img src="<?php echo get_template_directory_uri();?>/img/mobile-icon-search.svg" alt="">
		</div>

		<div class="col-md-9 main-menu hideonmobile">
			<?php wp_nav_menu( array('theme_location' => 'main_menu1') ); ?>
		</div>
	</div>
</div>
</header>

