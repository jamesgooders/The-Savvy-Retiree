<?php get_header(); ?>

<div id="banner">
    <h1>International Living</h1>
    <!-- <h3>Jobs Site</h3> -->
</div>

<h2 class="page-heading search-heading">Search Results for <?php echo get_search_query(); ?></h2></h2>

<?php if ( have_posts() ):?> 
        <ul class="search-list">
        <?php while ( have_posts() ) : the_post();?>

            <li><div class="card">
            <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </a>
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
        </div></li>
        <?php endwhile;?>
        </ul>
 <?php endif;?>

	

 <?php get_footer(); ?>