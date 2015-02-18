<?php
/**
 * Single.php
 *
 * The post template
 *
 * @link http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since BigBooty 0.1.0
 */
?>

<?php get_header(); ?>

<div class="container">   
	<div class="row">
		<div class="col-md-9">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="bigbreadcrumbs">
			<?php bigbooty_breadcrumbs(); ?>
		</div>

		<div class="page-header"> 

			<h1><?php the_title(); ?></h1>
			<?php
				$thumbnail_id = get_post_thumbnail_id(); 
				$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
				$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);                
			?>
			<p class="featured-image"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></p>

			<p class="post-meta">
				By  <span class="vcard author">
						<span class="fn"><?php the_author_link(); ?></span> 
					</span>
				on  <span class="date updated"><?php echo the_time('l, F jS, Y');?></span>
				in <?php the_category( ', ' ); ?>.
				<a href="<?php comments_link(); ?>" class="comments-number"><?php comments_number(); ?></a>
			</p>
		</div>

		<?php the_content(); ?>

		<hr>

		<?php comments_template(); ?>

		<?php endwhile; else: ?>
          
		<div class="page-header">
			<h1>Oh no!</h1>
		</div>

		<p>No content is appearing for this page!</p>

		<?php endif; ?>


		</div>
      
	<?php get_sidebar( 'blog' ); ?>

	</div>
</div>	
<?php get_footer(); ?>