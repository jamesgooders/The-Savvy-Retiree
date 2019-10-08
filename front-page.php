
	<?php get_header(); ?>

<div id="banner">
	<!-- <h1 id="sv-header"><span id="sr-the">The</span> <span id="sr-header">Savvy Retiree<span></h1> -->
	<!-- <h3>Jobs Site</h3> -->

	<div class="front-page-form">
				<div class="form-style">
					<form action="#SubscribeUrl#" id="LeadGen" method="POST">
						<div class="inner-wrap">
							<input class="sign-up" name="source" style="display: none;" type="hidden" value="#PROMOCODE#" /> 
							<input class="sign-up"  name="NotSaveSignup" style="display: none;" type="hidden" value="False" />

							<input class="sign-up" id="email" name="email" onblur="if(this.value == '') { this.value = 'Enter Your Email Address Here'; }" onfocus="if(this.value == 'Enter Your Email Address Here') { this.value = ''; }" type="text" value="Enter Your Email Address Here">
						</div>
						
						<div class="button-section">
							<input class="sign-up"  name="submit" style="cursor:pointer" type="submit" value="Submit Email Address">
						</div>

					</form>
				</div>
			</div>
</div>

<main>
	<a href="<?php echo site_url(''); ?>">
		<h2 class="section-heading">Home</h2>
	</a>
	<section>

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 10,
		);

		$blogposts = new WP_Query($args);

		while($blogposts->have_posts()) {
			$blogposts->the_post();
		 


		?>

		<div class="card">

		<div class="img-wrapper">
			<div class="card-image">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
				</a>
			</div>

			</div>
			<div class="card-description">
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
				</a>
				<p><?php echo wp_trim_words(the_excerpt(), 30);?></p>

				<a href="<?php the_permalink(); ?>" class="btn-readmore">Find Out More</a>
			</div>
		</div>
		
		<?php }

		wp_reset_query(); 

		?>
		
	</section>



	

	<!-- <h2 class="section-heading">Source Code</h2>

	<section id="section-source">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est aliquid et, laborum corporis recusandae. Cum sint itaque, laudantium cumque quasi libero consequatur, commodi. Nemo laboriosam beatae est quisquam labore repudiandae.</p>

		<a href="#" class="btn-readmore">Follow Us</a>

	</section> -->

	<?php get_footer(); ?>	

	