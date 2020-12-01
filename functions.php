<?php

function wpcontactform_menus()
{

	$locations = array(
		'primary' => 'Основное меню',
	);

	register_nav_menus($locations);
}

add_action('init', 'wpcontactform_menus');

function wpcontactform_register_styles()
{
	wp_register_style('slyle', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('slyle');
}

add_action('wp_enqueue_scripts', 'wpcontactform_register_styles');

function wpcontactform_scripts()
{
	wp_register_script('imask', get_template_directory_uri() . '/js/imask.js', ['jquery']);
	wp_enqueue_script('imask');

	wp_register_script('contact-form-handler', get_template_directory_uri() . '/js/contact-form-handler.js', ['jquery']);
	wp_enqueue_script('contact-form-handler');
}

add_action('wp_enqueue_scripts', 'wpcontactform_scripts');

function pluginname_ajaxurl()
{
	$admin_url = admin_url('admin-ajax.php');
	echo "
	<script type=\"text/javascript\">
		var ajaxurl = '" . $admin_url ."';
	</script>
	";
}
add_action('wp_head', 'pluginname_ajaxurl');
