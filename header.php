<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head();?>

	<title>Jameso</title>
</head>
<body>

	
<nav id="site-navigation" class="main-navigation" role="navigation">

<div id="logo-img">
			<a href="<?php echo site_url(''); ?>">
				<img src="<?php echo get_template_directory_uri();?>/img/savvy-retiree-logo.png" alt="Savvy Retiree">
			</a>
		</div>



			
	<button class="menu-toggle" aria-controls="primary" aria-expanded="false"><i class="fa fa-bars"></i></button>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary') ); ?>


	
</nav>


	


	<?php if(!is_front_page()) { ?>

		<main>

	<?php } ?>	
	
