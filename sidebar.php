<?php
/**
 *******************************************************************************
 * //sidebar.php
 *******************************************************************************
 *
 * The general siderbar.
 *
 * READ MORE
 * https://codex.wordpress.org/Customizing_Your_Sidebar
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/
?>

<div class="col-md-offset-1 col-md-4" id="sidebar">
    <?php if ( !dynamic_sidebar( 'page' ) ): ?>
    <?php endif; ?>
</div>
