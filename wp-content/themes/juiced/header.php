<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name') ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- site header -->
	<div class="container">
		<header class="site_header">
			<h1><?php bloginfo('name'); ?></h1>
			<h3><?php bloginfo('description'); ?></h3>

<!-- nav menu -->
			<nav class="site-nav">
				<?php wp_nav_menu(); ?>
			</nav>

		</header>
</body>