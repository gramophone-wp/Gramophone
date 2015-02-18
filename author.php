<?php
/**
 * Summary
 *
 * The template for displaying Author Related Posts & Content
 *
 * @author pj hampton
 * @link http://codex.wordpress.org/Function_Reference/get_the_author_meta
 * @todo Finish Structure + Implement loop + Add Author Social Media Links
 * @since BigBooty 1.0.0
 */

// User Information
$user_id = get_the_author_meta('id');
$biography = get_the_author_meta('description'); 

// Social Media
$user_gplus = get_the_author_meta('googleplus');
$user_twitter = get_the_author_meta('twitter');

?>


<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="page-header">
			<h1><?php the_author(); ?></h1>
		</div>
		<div class="row" id="authorDetails">
			<?php echo get_avatar($user_id); ?>
			<p><?php echo $biography; ?></p>
		</div>
	</div>
	<div class="posts">
		<?php 
		$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
		?>

		<!-- The Loop -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
			<?php the_title(); ?></a>,
			<?php the_time('d M Y'); ?> in <?php the_category('&');?>
		</li>

		<?php endwhile; else: ?>
			<p><?php _e('No posts by this author.'); ?></p>
		<?php endif; ?>

		<!-- End Loop -->
		
	</div>
</div>

<?php get_footer(); ?>