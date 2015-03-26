<?php
/**
 * sidebar.php
 * @copyright 2014 - 2015
 *
 * The Siderbar
 *
 * @author pjh
 * @link http://codex.wordpress.org/Function_Reference/get_sidebar
 * @since BigBooty 0.3.0
 */
?>

<div class="col-md-3 sidebar-offcanvas" id="sidebar">

    <?php if ( !dynamic_sidebar( 'page' ) ): ?>

    <h3>Sidebar (Page)</h3>
    <p>Oh! No Sidebar?</p>	

    <?php endif; ?>

</div>
