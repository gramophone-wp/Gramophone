<?php
/**
 * Standard Sidebar
 *
 *
 * @since BigBooty 1.0.1
 */
?>

<div class="col-md-3 sidebar-offcanvas" id="sidebar">

	<?php if ( ! dynamic_sidebar( 'page' ) ): ?>

	<h3>Sidebar (Page)</h3>
	<p>Oh! No Sidebar?</p>	

	<?php endif; ?>
	
</div>
