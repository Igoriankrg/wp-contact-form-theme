<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="<?= get_stylesheet_uri() ?>"/>
	<?php wp_head() ?>
</head>
<body>
<header id="masthead" class="site-header" role="banner">
	<div class="contact-form__navigation-primary">
		<?php get_template_part('template-parts/navigation/navigation', 'primary'); ?>
	</div>
</header>