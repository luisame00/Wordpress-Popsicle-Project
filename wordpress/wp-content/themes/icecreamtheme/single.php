<?php get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
	the_post();  
?>
<main>

	<?php 
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
	?>

	<section class="full-article">
		<div class="left">
            <h2><?php the_title(); ?></h2>

			<div class="info-user">
				<h3>Product by: <?php the_author(); ?></h3>
				<h4>Published on: <?php the_time('F j, Y'); ?></h4>
			</div>
			<p class="content-post"><?php echo get_the_content(); ?></p>

            <h5>One scoop <?php the_field('post:_price_one_scoop'); ?>  Two scoops <?php the_field('post:_price_two_scoops'); ?></h5>

            <a class="link-post"href="<?php echo home_url(); ?>">Visit WebSite</a>

            <?php            
            $prev_post = get_previous_post();
            if ($prev_post) : ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-post-button">
                    View Previous Post
                </a>
            <?php endif; ?>

            <?php 
            $next_post = get_next_post(); 
            if ($next_post) : ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-post-button">
                    View Next Post
                </a>
            <?php endif; ?>
		</div>
        <div class="right">
			<div class="container-img" style="background-image:url(<?php echo $url;?>);">
			</div>
		</div>
	</section>
</main>
<?php
		} // end while
	} // end if
?>
<!-- END THE WP LOOP HERE -->


<?php get_footer(); ?>