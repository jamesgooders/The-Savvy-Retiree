

<?php get_header(); ?>




	<a href="<?php echo site_url('/projects'); ?>">
		<h2 class="page-heading-single"><?php the_archive_title() ?></h2>
	</a>
	<section>

		<?php

		// The below can also be changed to 'project' in the case of this template and the number below states how many posts to display

		$args = array(
			'post_type' => 'project',
			'posts_per_page' => 4,
		);

		$blogposts = new WP_Query($args);

		while(have_posts()) {
			the_post();
		 


		?>

		<div class="card">
		<div class="img-wrapper">
			<div class="card-image">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
				</a>
				</div>
			</div>

			<!-- This displays the titles and adds in the permalink to the posts/projects -->

			<div class="card-description">
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
                </a>
                
                <div class="card-meta">
            Posted by <?php the_author(); ?> on <?php the_time('F j, Y') ?>  
            </div>
				
				<p><?php echo wp_trim_words(the_excerpt(), 30);?></p>

				<a href="<?php the_permalink(); ?>" class="btn-readmore">Find Out More</a>
			</div>
		</div>
		
		<?php }

		wp_reset_query(); 

		?>
		
    </section>
    
    <a href="<?php echo site_url('/projects'); ?>">

    <h2 class="section-heading">All Projects</h2>
    
        </a>
	
	<div class="pagination">
		<?php echo paginate_links(); ?>
	</div>
	


	<?php get_footer(); ?>	

	