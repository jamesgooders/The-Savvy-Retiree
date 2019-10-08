<?php get_header(); ?>

<div id="banner">
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

<h2 class="page-heading-single search-heading">Search Results for <?php echo get_search_query(); ?></h2></h2>

<?php if ( have_posts() ):?> 
        
        <?php while ( have_posts() ) : the_post();?>

            <div class="card card-search">
            <div class="img-wrapper">
            <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </a>
            </div>

        </div>
            <div class="card-description">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <div class="card-meta">
            Posted by <?php the_author(); ?> on <?php the_time('F j, Y') ?> in 
            <a href="#"><?php echo get_the_category_list(', ') ?></a>
            </div>
                <p><?php echo wp_trim_words(the_excerpt(), 30);?></p>

                <a href="<?php the_permalink(); ?>" class="btn-readmore">Find Out More</a>
            </div>
        </div>
        <?php endwhile;?>
       
 <?php endif;?>

	

 <?php get_footer(); ?>