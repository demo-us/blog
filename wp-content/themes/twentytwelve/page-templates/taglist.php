<?php
/**
 * Template Name: Tag-List Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

<hr>
<?php
	$tag = 'nginx'; 
	$args=array(
		'tag' => $tag',
		'showposts'=>50,  
		'caller_get_posts'=>1
	);
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		echo 'files out ';
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
		<?php
		endwhile;
	} 
	wp_reset_query(); 
?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
