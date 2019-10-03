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

	<div id="slideout-menu">

		<ul>
		<li><a href="<?php echo site_url(''); ?>">Home</a></li>
		<li><a href="<?php echo site_url('/blog'); ?>">Retire Early</a></li>
		<li><a href="<?php echo site_url('/projects'); ?>">Right Sizing</a></li>
		<li><a href="<?php echo site_url('/about'); ?>">Health & Wellbeing</a></li>
		<li><a href="<?php echo site_url('/about'); ?>">Roving Retirement</a></li>
		<li><a href="<?php echo site_url('/about'); ?>">Lifestyle</a></li>
		<li><a href="<?php echo site_url('/about'); ?>">Savings</a></li>
		<li><a href="<?php echo site_url('/about'); ?>">Social Security</a></li>
		
		<div class="searchbox-slide-menu">
			<?php get_search_form(); ?>
		</div>
		</ul>
	
	</div>

	<nav>
		<div id="logo-img">
			<a href="<?php echo site_url(''); ?>">
				<img src="<?php echo get_template_directory_uri();?>/img/IL-Logo-White.png" alt="IL Logo">
			</a>
		</div>
		<div id="menu-icon">
			<i class="fas fa-bars"></i>
		</div>

		<ul>
		<li><a href="<?php echo site_url(''); ?>"
			<?php if(is_front_page()) echo 'class="active"' ?>
			>Home</a>
		</li>
		
		<li><a href="<?php echo site_url('/blog'); ?>"
			<?php if(get_post_type() == 'post') echo 'class="active"' ?>
		>Retire Early</a>
		</li>
		
		<li><a href="<?php echo site_url('/projects'); ?>"
		<?php if(get_post_type() == 'project') echo 'class="active"' ?>
		>Right Sizing</a>
		</li>
		
		<li><a href="<?php echo site_url('/about'); ?>"
		<?php if(is_page('about')) echo 'class="active"' ?>
		>Health & Wellbeing</a>
		</li>
		
		<li><a href="<?php echo site_url('/about'); ?>"
		<?php if(is_page('about')) echo 'class="active"' ?>
		>Roving Retirement</a>
		</li>

		<li><a href="<?php echo site_url('/about'); ?>"
		<?php if(is_page('about')) echo 'class="active"' ?>
		>Lifestyle</a>
		</li>

		<li><a href="<?php echo site_url('/about'); ?>"
		<?php if(is_page('about')) echo 'class="active"' ?>
		>Savings</a>
		</li>

		<li><a href="<?php echo site_url('/about'); ?>"
		<?php if(is_page('about')) echo 'class="active"' ?>
		>Social Security</a>
		</li>

		<li>
			<div id="search-icon">
				<i class="fas fa-search"></i>
			</div>
		</li>
		</ul>
	</nav>

	<div id="searchbox">
	<?php get_search_form(); ?>
	</div>

	<?php if(!is_front_page()) { ?>

		<main>

	<?php } ?>	
	
