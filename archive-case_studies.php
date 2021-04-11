<?php
/**
 * The template for displaying the case studies archive page
 */

get_header(); ?>

<div id="primary" class="site-content">
    <div class="content" role="main">
        <?php while ( have_posts() ) : the_post(); 
            $image_1 = get_field("image_1");
            $size="full";
            $services = get_field('services'); ?>

    <article class="case-study">
    <div class="archive-case-study">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<h5><?php echo $services; ?></h5>
		<?php the_excerpt(); ?>
		<h6><strong><a href="<?php the_permalink(); ?>">View Project ></a></strong></h6>
</div>

<div class="archive-case-study-images">
    <a href="<?php the_permalink(); ?>">
	<?php if($image_1) {
		echo wp_get_attachment_image( $image_1, $size );
	 } ?> </a>
        </div>
	    </article>    
        <?php endwhile; // end of the loop. ?>
            </div>
		    </div>
        
    
    

    <?php get_footer(); ?>