<?php
/**
 * sidebar-blog.php
 * @copyright 2014 - 2015
 *
 * The blog sidebar
 *
 * @author pj hampton
 * @link http://codex.wordpress.org/Function_Reference/get_sidebar
 * @since BigBooty 0.3.0
 */
?>

<div class="col-md-3" id="sidebar">

	<?php if ( ! dynamic_sidebar( 'blog' ) ): ?>

	<h3>Sidebar (Blog)</h3>
	<p>Oh! It looks like you haven't set up your sidebar yet!</p>

	<?php endif; ?>

</div>
